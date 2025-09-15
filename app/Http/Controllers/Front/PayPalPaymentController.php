<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Models\CustomerAddress;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use Session, Redirect, Config;
use Mail;
use App\Models\Settings;

class PayPalPaymentController extends Controller
{
    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function handlePayment($orderId)
    {   $currency = session()->get('currency', []);
       
        if(!empty($currency)){
            if($currency == 'INR'){
                $basePriceINR = currencySymbol($currency);
                $currency = strtoupper('GBP');
            }else{
                $currency = strtoupper($currency);
            }
        }else{
            $currency = 'GBP';
        }
       
        $getOrderDetails = Order::with('getOrderDetailsFunction')->where('id',$orderId)->first();
        $maxOrderId = Order::max('custom_order_id');
        

        if(isset($maxOrderId) && !empty($maxOrderId)){
            $generateCustomOrderId = '31002'.''.$getOrderDetails->user_id.''.$getOrderDetails->id;
        }else{
            $generateCustomOrderId = '31002';
        }

        $getProdustItems = [];
        foreach($getOrderDetails->getOrderDetailsFunction as $key => $orderDetails){
            if(session()->get('currency', []) == 'INR'){
                $convertedPriceINRGBP = $basePriceINR['MY_CURRENCY_BASE_PRICE'];
            }else{
                $convertedPriceINRGBP = 1;
            }

            $getFinalPrices = $orderDetails->deposited_product_price / $convertedPriceINRGBP;

          
            
            $item = new Item();
            $item->setName(isset($orderDetails->product_details->title)?$orderDetails->product_details->title:'No Name') /** item name **/
                        ->setCurrency($currency)
                        ->setQuantity(isset($orderDetails->quantity)?$orderDetails->quantity:1)
                        ->setPrice($getFinalPrices); /** unit price **/
            $getProdustItems[] = $item;
        }

        $orderFinalPrice = $getOrderDetails->final_price / $convertedPriceINRGBP;


        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_list = new ItemList();
        $item_list->setItems($getProdustItems);

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($orderFinalPrice);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('success.payment')) /** Specify return URL **/
            ->setCancelUrl(route('cancel.payment'));


        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
            \Session::put('error', 'Connection timeout');
                            return Redirect::route('paywithpaypal');
            } else {
            \Session::put('error', 'Some error occur, sorry for inconvenient');
                            return Redirect::route('paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
            $redirect_url = $link->getHref();
                            break;
            }
        }

        if (isset($redirect_url)) {
            $getOrderDetails = Order::where('id',$orderId)->update(['token'=>$payment->getToken(),'custom_order_id'=>$generateCustomOrderId,'pay_timestamp'=>date('Y-m-d h:i:s', strtotime($payment->getCreateTime())),'acknowledge'=>$payment->getState(),'status'=>1]);
            return Redirect::away($redirect_url);
        }

        $getOrderDetails = Order::where('id',$orderId)->update(['token'=>$payment->getToken(),'custom_order_id'=>$generateCustomOrderId,'pay_timestamp'=>date('Y-m-d h:i:s', strtotime($payment->getCreateTime())),'acknowledge'=>$payment->getState(),'status'=>0]);

        return redirect()->back()->with('error','Payment gateway initiliazation failed.');
    }

    public function paymentCancel(Request $request)
    {
        session()->forget('cart');

        $getOrderDetails = Order::where('token',$request->token)->update(['status'=>3]);

        $getOrderDetailsMail = Order::with('getOrderDetailsFunction')->where('token',$request->token)->first()->toArray();

        $admin_email = Settings::where("option_name",'admin_email')->value('option_value');
        $transaction_emails = Settings::where("option_name",'transaction_emails')->value('option_value');

        $data = [
            'data' => $getOrderDetailsMail
        ];
        if (env('APP_ENV') == 'production') {
            $request['customer_email'] = $getOrderDetailsMail['user_details']['email'];
            Mail::send('email.orderstatus-cancel', array('data1' => $data,), function($message) use ($request,$admin_email, $transaction_emails ){
                $message->from('hello@marlows-diamonds.co.uk');

                $admin_email_london = "london@marlows-diamonds.co.uk";
                $message->to($admin_email_london, 'Admin')->subject('Marlows Diamonds: Your transaction not completed.');
                
                /** add cc for more users */
                if(!empty($transaction_emails)){
                    $emails_to_cc = explode(',', $transaction_emails);
                    foreach ($emails_to_cc as $email_to_cc) {
                        $message->cc($emails_to_cc, 'Third party')->subject('Marlows Diamonds: Your transaction not completed.');   
                    }
                }
                
                $message->cc($request['customer_email'], 'Customer')->subject('Marlows Diamonds: Your transaction not completed.');
            });
        } else if (env('APP_ENV') == 'local') {
            $request['customer_email'] = $getOrderDetailsMail['user_details']['email'];
            Mail::send('email.orderstatus-cancel', array('data1' => $data,), function($message) use ($request,$admin_email, $transaction_emails ){
                $message->from('hello@marlows-diamonds.co.uk');

                $admin_email_london = "sharma.gajendra@dotsquares.com";
                $message->to($admin_email_london, 'Admin')->subject('Marlows Diamonds: Your transaction not completed.');
                
                /** add cc for more users */
                if(!empty($transaction_emails)){
                    $emails_to_cc = explode(',', $transaction_emails);
                    foreach ($emails_to_cc as $email_to_cc) {
                        $message->cc("sharma.gajendra@dotsquares.com", 'Third party')->subject('Marlows Diamonds: Your transaction not completed.');   
                    }
                }
                
                $message->cc($request['customer_email'], 'Customer')->subject('Marlows Diamonds: Your transaction not completed.');
            });
        }

        $result = [
            'response' => trans('checkout.yourOrderNumber').'('.$getOrderDetailsMail['custom_order_id'].') '.trans('checkout.hasBeenCancelled'),
            // 'getOrderDetails' => (isset($getOrderDetails)?$getOrderDetails:[]),
        ];

        return view('front.pages.cancel-page',$result);
        // dd('Your payment has been decliend. The payment cancelation page goes here!');
    }

    public function paymentSuccess(Request $request)
    {
        session()->forget('cart');
        $requestData = $request->all();
        if(isset($request->paymentId) && isset($request->PayerID) && isset($request->token)){
            $payment = Payment::get($requestData['paymentId'], $this->_api_context);
            $execution = new PaymentExecution();
            $execution->setPayerId($requestData['PayerID']);
            $result = $payment->execute($execution, $this->_api_context);

            if ($result->getState() == 'approved') {
                $getOrderDetails = Order::where('token',$request->token)->update(['status'=>2]);

                $getOrderDetailsMail = Order::with('getOrderDetailsFunction')->where('token',$request->token)->first()->toArray();

                $admin_email = Settings::where("option_name",'admin_email')->value('option_value');
                $transaction_emails = Settings::where("option_name",'transaction_emails')->value('option_value');

                $data = [
                    'data' => $getOrderDetailsMail
                ];

                if (env('APP_ENV') == 'production') {
                    $request['customer_email'] = $getOrderDetailsMail['user_details']['email'];
                        Mail::send('email.orderstatus', array(
                        'data1' => $data,
                    ), function($message) use ($request,$admin_email, $transaction_emails ){
                        $message->from('hello@marlows-diamonds.co.uk');
                        $message->to($admin_email, 'Admin')->subject('Your Marlows Diamonds order has been received!');

                        if(!empty($transaction_emails)){
                            $emails_to_cc = explode(',', $transaction_emails);
                            foreach ($emails_to_cc as $email_to_cc) {
                                $message->cc($emails_to_cc, 'Third party')->subject('Marlows Diamonds: Your transaction not completed.');   
                            }
                        }

                        $message->cc($request['customer_email'], 'Customer')->subject('Your Marlows Diamonds order has been received!');
                    });
                } else if (env('APP_ENV') == 'local') {
                    $request['customer_email'] = $getOrderDetailsMail['user_details']['email'];
                        Mail::send('email.orderstatus', array(
                        'data1' => $data,
                    ), function($message) use ($request,$admin_email, $transaction_emails ){
                        $message->from('hello@marlows-diamonds.co.uk');
                        $message->to('sharma.gajendra@dotsquares.com', 'Admin')->subject('Your Marlows Diamonds order has been received!');

                        if(!empty($transaction_emails)){
                            $emails_to_cc = explode(',', $transaction_emails);
                            foreach ($emails_to_cc as $email_to_cc) {
                                $message->cc('sharma.gajendra@dotsquares.com', 'Third party')->subject('Marlows Diamonds: Your transaction not completed.');   
                            }
                        }

                        $message->cc($request['customer_email'], 'Customer')->subject('Your Marlows Diamonds order has been received!');
                    });
                }
                
                $result = [
                    'pay' => $getOrderDetailsMail,
                    'response' => trans('checkout.yourOrderNumber').'('.$getOrderDetailsMail['custom_order_id'].') '.trans('checkout.hasBeenSuccessFullyPaid'),
                ];
                return view('front.pages.success-page',$result);
            }
        }else{
            return view('front.pages.cancel-page',[]);
        }

        // $getOrderDetails = Order::where('token',$request->token)->update(['status'=>3]);
        // // prd($getOrderDetails);
        // if(!empty($getOrderDetails)){
        //     $result = [
        //         'response' => 'Your Order number('.$getOrderDetails->id.') has been cancelled',
        //         'getOrderDetails' => $getOrderDetails
        //     ];
    
        //     return view('front.pages.cancel-page',$result);
        // }else{
        //     return view('front.pages.cancel-page',[]);
        // }

        

        dd('Error occured!');
    }
}
