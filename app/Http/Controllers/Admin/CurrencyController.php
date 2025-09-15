<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Currency;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use URL;
use Session;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumb = [
            ["name" => "Currency", "url" => route("admin.currency"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $query = Currency::orderBy('id', 'DESC');
        $query = getFilter(Currency::class, $query, $request->all());
        $currencies = $query->get();
        return view('admin.currency.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = [
            ["name" => "Add Currency", "url" => route("admin.currency"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        // $faqs = Faqs::all();
        //$faqcategories = FaqCategory::get();
        return view('admin.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        $input = $request->all();
        $request->validate([
           'currency_name' => 'required',
            'currency_sign' => 'required',
            'currency_title' => 'required',
            'status' => 'required',
        ]);
        try {
            $currencies = Currency::create($input);
            $basePrice = $input['base_price'];
            $currency_name = strtolower($input['currency_name']);
            $temp_table = 'currency_' . $currency_name;
            if (Schema::hasTable($temp_table))
                Schema::drop($temp_table);
            $result = Schema::create($temp_table, function (Blueprint $table) {
                $table->id();
                $table->string('diamond_type')->nullable();
                $table->bigInteger('product_id')->nullable();
                $table->bigInteger('variation_id')->nullable();
                $table->string('product_name')->nullable();
                $table->string('product_price')->nullable();
                $table->string('coverted_price')->nullable();
                $table->string('margin')->default(0);
                $table->string('discount')->default(0);
                $table->string('total')->nullable();
                $table->string('vat')->default(0);
                $table->string('grand_total')->nullable();
                $table->tinyInteger('status')->nullable();
                $table->timestamp('created_at', 0);
                $table->timestamp('updated_at', 0)->useCurrent();
            });

            
        } catch (\Illuminate\Database\QueryException $e) {

            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                return redirect()->action('Admin\CurrencyController@create')->with('alert-danger', 'Duplicate Entry');
            }
        }

        return redirect()->action('Admin\CurrencyController@index')->with('alert-success', 'Currency Added Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($currencyid)
    {
        $id = base64_decode($currencyid);
        $currencyData = DB::table('currency')->where('id', $id)->first();
        $currency_name = strtolower($currencyData->currency_name);
        $temp_table = 'currency_' . $currency_name;
        if (Schema::hasTable($temp_table))
            Schema::drop($temp_table);
        Currency::find($id)->delete();
        return redirect()->action('Admin\CurrencyController@index')->with('success', 'Currency Deleted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($currencyid = null)
    {
        $breadcrumb = [
            ["name" => "Edit Currency", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $id = base64_decode($currencyid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $currency = Currency::find($id);
        if (empty($currency)) {
            return 'URL NOT FOUND';
        }
        $currency = Currency::find($id);

        $currencyData = DB::table('currency')->where('id', $id)->first();
        $basePrice = $currencyData->base_price;
        $currency_name = strtolower($currencyData->currency_name);
        $temp_table = 'currency_' . $currency_name;
        $currencyDetails = DB::table($temp_table)->get();

        foreach ($currencyDetails as $rowData) {
            $product_price = $rowData->product_price;
            $coverted_price = $product_price * $basePrice;
            DB::table($temp_table)
                ->where('variation_id', $rowData->variation_id)
                ->limit(1)
                ->update(array('coverted_price' => $coverted_price));
        }

        return view('admin.currency.edit', compact('currency'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $currencyid)
    {

        $id = base64_decode($currencyid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }
        $currency = Currency::findOrFail($id);

        if (empty($currency)) {
            return 'URL NOT FOUND';
        }

        $input = $request->all();
        $request->validate([
            'currency_name' => 'required',
            'currency_sign' => 'required',
            'base_price' => 'required',
            'status' => 'required',

        ]);

        $currency->fill($input)->save();
        $basePrice = $input['base_price'];
        $currency_name = strtolower($input['currency_name']);
        $temp_table = 'currency_' . $currency_name;
        $currencyDetails = DB::table($temp_table)->get();
        foreach ($currencyDetails as $rowData) {
            $product_price = $rowData->product_price;
            $coverted_price = $product_price * $basePrice;
            DB::table($temp_table)
                ->where('variation_id', $rowData->variation_id)
                ->limit(1)
                ->update(array('coverted_price' => $coverted_price));
        }

        return redirect()->action('Admin\CurrencyController@index')->with('alert-success', 'Currency Updated Successfully');
    }

    /**
     * Status
     */
    public function status($ids, $status)
    {
        $ids = base64_decode($ids);
        $currency =  Currency::find($ids);
        if (empty($currency)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);
        $currency->fill($input)->save();
        return redirect()->action('Admin\CurrencyController@index')->with('alert-success', 'Currency Status Updated Successfully');
    }

    public function productCurrency($currency = 'GBP', Request $request)
    {
        Session::put('currency', $currency);
        $currencyData = DB::table('currency')->where('currency_name', $currency)->first();
        $basePrice = $currencyData->base_price;
        $temp_table = 'currency_' . $currency;
        $currencyTitle = 'Currency ' . $currency;
        $breadcrumb = [
            ["name" => $currencyTitle, "url" => "", "icon" => "fa fa-dashboard"],
            ["name" => "Currency", "url" => route("admin.currency"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $results = DB::table($temp_table)->count();

            $productDetails = \DB::select("SELECT `md_products`.id as product_id, `md_products`.`title` as product_title, vd.*,  md_product_variations.sale_price, md_product_variations.regular_price, md_product_variations.mined_diamond, md_product_variations.lab_grown from (SELECT variation_id, GROUP_CONCAT(`value`) as attri_name FROM `md_product_variation_details`
            GROUP BY variation_id) as vd
            JOIN `md_product_variations` on vd.variation_id = `md_product_variations`.`id`
            JOIN `md_products` on `md_products`.id = `md_product_variations`.`product_id`;");


            foreach ($productDetails as $rowData) {

                $product_id = $rowData->product_id;
                $variation_id = $rowData->variation_id;
                $title = $rowData->product_title;
                $chooseDiamond = array("mined_diamond", "lab_grown");
               
                foreach($chooseDiamond as $c_Diamond){
                    if(isset($rowData->mined_diamond) && $c_Diamond == 'mined_diamond'){
                        $regular_price = $rowData->mined_diamond;
                    }elseif(isset($rowData->lab_grown) && $c_Diamond == 'lab_grown'){
                        $regular_price = $rowData->lab_grown;
                    }else{
                        $regular_price = $rowData->regular_price;
                    }
                    
                    $attri_name = $rowData->attri_name;
                    $mainTitle = $title . ',' . $attri_name;
                    $coverted_price = round($basePrice * $regular_price, 2);
                    
                    DB::table($temp_table)->updateOrInsert([
                        'diamond_type' => $c_Diamond,
                        'product_id' => $product_id,
                        'variation_id' => $variation_id,
                        'product_name' => $mainTitle,
                        'product_price' => $regular_price,
                        'coverted_price' => $coverted_price,
                    ]);
                }
            }
       

        $output['currency_product_data'] = DB::table($temp_table)->get();
        foreach ($output['currency_product_data'] as $rowData) {
            $product_price = $rowData->product_price;
            $margin = $rowData->margin;
            $discount = $rowData->discount;
            $vat = $rowData->vat;
            $output['coverted_price'] = $product_price * $basePrice;
            $marginCal = $output['coverted_price'] * $margin / 100;
            $marginVal = $output['coverted_price'] + $marginCal;
            $discountValue = $marginVal * $discount / 100;
            $output['total'] = round($marginVal - $discountValue, 2);
            $vatcal = $output['total'] * $vat / 100;
            $output['grand_total'] = round($output['total'] + $vatcal, 2);


            DB::table($temp_table)
                ->where('variation_id', $rowData->variation_id)
                ->where('diamond_type', $rowData->diamond_type)
                ->update(array('total' => $output['total'], 'grand_total' => $output['grand_total']));
        }

        $finalData = DB::table($temp_table)
            ->when($request->product_name, function ($query) use ($request) {
                return $query->where('product_name', 'like', '%' . $request->product_name . '%');
            })->paginate(10);

        return view('admin.currency.product_currency', compact('finalData', 'currency'));
    }

    public function productCurrencyUpdateCell(Request $request)
    {
        $currency = Session::get('currency');

        $currencyData = DB::table('currency')->where('currency_name', $currency)->first();
        $basePrice = $currencyData->base_price;
        $temp_table = 'currency_' . $currency;
        $input = $request->all();
        if ($input['value'] == "")
            $input['value'] = 0;

        $getData = DB::table($temp_table)->where('id', $input['id'])->first();
        $product_price =  $getData->product_price;
        $margin =  $getData->margin;
        $discount = $getData->discount;
        $vat = $getData->vat;
        $coverted_price = $product_price * $basePrice;
        $marginCal = $coverted_price * $margin / 100;
        $marginVal = $coverted_price + $marginCal;
        $discountValue = $marginVal * $discount / 100;
        $total = $marginVal - $discountValue;
        $vatcal = $total * $vat / 100;
        $grand_total = $total + $vatcal;

        DB::table($temp_table)
            ->where('id', $input['id'])
            ->limit(1)
            ->update(array($input['cellName'] => $input['value'], 'total' => $total, 'grand_total' => $grand_total));

        return Response()->json(['staus' => 'success']);
    }
    public function productCurrencyUpdateRows(Request $request)
    {
        $currency = Session::get('currency');
        $currencyData = DB::table('currency')->where('currency_name', $currency)->first();
        $basePrice = $currencyData->base_price;
        $temp_table = 'currency_' . $currency;
        $input = $request->all();

        $getData = DB::table($temp_table)->get();
        foreach ($getData as $rowData) {
            $getData = DB::table($temp_table)->get();
        $coverted_price =  $rowData->coverted_price;

        if($input['rowsName'] == 'vat') {
            $getData->vat = $input['value'];
            DB::table($temp_table)
            ->update(array('vat' => $getData->vat));

        }if($input['rowsName'] == 'discount'){
            $getData->discount = $input['value'];

            DB::table($temp_table)
            ->update(array('discount' => $getData->discount));

        }if($input['rowsName'] == 'margin'){
            $getData->margin = $input['value'];
            DB::table($temp_table)
            ->update(array('margin' => $getData->margin));
        }

}
    return Response()->json(['staus' => 'success']);
    }
}