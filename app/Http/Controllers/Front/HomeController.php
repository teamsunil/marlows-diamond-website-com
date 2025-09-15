<?php

namespace App\Http\Controllers\Front;

//use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\DownloadDetail;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;
use Mail;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.index');
    }

    public function downloadPDF(Request $request)
    {

        $admin_email = Settings::where("option_name", 'admin_email')->value('option_value');

        $input = $request->all();
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:download_details|max:255',
        ]);



        $getDetailsSubmit = DownloadDetail::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if (isset($getDetailsSubmit) && !empty($getDetailsSubmit)) {

            Mail::send('email.mail', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
            ), function ($message) use ($request, $admin_email) {
                $message->from('hello@marlows-diamonds.co.uk');
                $message->to($admin_email, 'Admin')->subject('NEED ASSISTANCE?');
            });

            $file_path = public_path('assets/images/Marlows-DiamONDS-TERMINOLOGY-GUIDE-INFOGRAPHIC.pdf');
            return response()->download($file_path, 'example.pdf', [], 'inline');
        }

        return back()->with('error', 'Please fill necessory details');
    }

    public function globalConvert(Request $request)
    {
        $data = $request->all();
        
        if (isset($data['location']))
            Session::put('location', $data['location']);

        if (isset($data['currency'])) {
            if ($data['currency'] == Session::get('currency')) {
                $selectedCurrency = DB::table('countries')->where('shortname', $data['location'])->value('currency');
                Session::put('currency', $selectedCurrency);
            } else {
                Session::put('currency', $data['currency']);
            }
        }

        if (isset($data['language']))
            Session::put('language', $data['language']);
            Session::put('currency', isset($data['currency'])?$data['currency']:'USD');
            Session::put('old_currency', isset($data['old_currency'])?$data['old_currency']:'USD');

        addToCartWithCurrency();
        
        if($request->status == 'lang'){
            return true;
        }
        return Redirect::to($request->currenturl);
    }
}
