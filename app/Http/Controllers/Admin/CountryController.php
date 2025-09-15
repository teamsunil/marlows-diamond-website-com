<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;


use URL;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumb = [
            ["name" => "Country", "url" => route("admin.country"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        
        $query = Country::orderBy('id', 'ASC');
        $query = getFilter(Country::class, $query, $request->all());

        $country = $query->paginate(10);

        return view('admin.country.index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = [
            ["name" => "Add Country", "url" => route("admin.country"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $currencyData = Currency::orderBy('id', 'DESC')->get()->toArray();
        $currencyArray = array();
        foreach ($currencyData as $key => $value) {
          
            $currencyArray[$key]['id'] = $value['id'];
            $currencyArray[$key]['name'] = $value['currency_name'];
        }
        $languagesData = Language::orderBy('id', 'DESC')->get()->toArray();
        
        $languagesArray = array();
        foreach ($languagesData as $key => $value) {
            $languagesArray[$key]['title'] = $value['title'];
            $languagesArray[$key]['language_code'] = $value['language_code'];
        }//dd($languagesArray);

        $result = [
            'languagesArray' => $languagesArray,
            'currencyArray' => $currencyArray,
        ];
        return view('admin.country.create', compact('result'));
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
            'name' => 'required',
            'language_code' => 'required',
            'status' => 'required',
            'currency' => 'required',

        ]);

        try {
            $countries = Country::create($input);
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                return redirect()->action('Admin\CountryController@create')->with('alert-danger', 'Duplicate Entry');
            }
        }

        return redirect()->action('Admin\CountryController@index')->with('alert-success', 'Country Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($countryid = null)
    { 
        $breadcrumb = [
            ["name" => "Edit Country", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $id = base64_decode($countryid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $county = Country::find($id);


        if (empty($county)) {
            return 'URL NOT FOUND';
        }
        $currencyData = Currency::orderBy('id', 'DESC')->get()->toArray();
        $currencyArray = array();
        foreach ($currencyData as $key => $value) {
            $currencyArray[$key]['id'] = $value['id'];
            $currencyArray[$key]['name'] = $value['currency_name'];
        }
        $languagesData = Language::orderBy('id', 'DESC')->get()->toArray();
        $languagesArray = array();
        foreach ($languagesData as $key => $value) {
            $languagesArray[$key]['title'] = $value['title'];
            $languagesArray[$key]['language_code'] = $value['language_code'];
        }

        $country = Country::find($id);
        $result = [
            'country' => $country,
            'currencyArray' => $currencyArray,
            'languagesArray' => $languagesArray

        ];
        //dd($faqs );
        return view('admin.country.edit', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $countryid)
    {

        $id = base64_decode($countryid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $country = Country::findOrFail($id);

        if (empty($country)) {
            return 'URL NOT FOUND';
        }



        $input = $request->all();
        
        $request->validate([
            'name' => 'required|max:255',
            'shortname' => 'required',
            'status' => 'required',

        ]);

        $country->fill($input)->save();

        return redirect()->action('Admin\CountryController@index')->with('alert-success', 'Country Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($countryid)
    {
        $id = base64_decode($countryid);
        Country::find($id)->delete();



        return redirect()->action('Admin\CountryController@index')->with('success', 'Country Deleted Successfully');
    }
    /**
     * Status
     */
    public function status($ids, $status)
    {
        $ids = base64_decode($ids);
        $languages =  Country::find($ids);
        if (empty($languages)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);

        $languages->fill($input)->save();

        return redirect()->action('Admin\CountryController@index')->with('alert-success', 'Country Status Updated Successfully');
    }
}
