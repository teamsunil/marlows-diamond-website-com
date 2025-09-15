<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Country;
use App\Models\Currency;

use URL;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumb = [
            ["name" => "Language", "url" => route("admin.language"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $query = Language::orderBy('id', 'DESC');
        $query = getFilter(Language::class, $query, $request->all());

        $languages = $query->paginate(10);

        return view('admin.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = [
            ["name" => "Add Language", "url" => route("admin.language"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $languages = Language::all();


        $result = [
            'languages' => $languages,
            // 'currencyArray' => $currencyArray,
            // 'countriesArray' => $countriesArray

        ];
        //$faqcategories = FaqCategory::get();
        return view('admin.languages.create', compact('result'));
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
            'title' => 'required',

            'status' => 'required',

        ]);
        try {

            $languages = Language::create($input);
        } catch (\Illuminate\Database\QueryException $e) {

            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                return redirect()->action('Admin\LanguageController@create')->with('alert-danger', 'Duplicate Entry');
            }
        }

        return redirect()->action('Admin\LanguageController@index')->with('alert-success', 'Language Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($languageid = null)
    {
        $breadcrumb = [
            ["name" => "Edit Language", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $id = base64_decode($languageid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $languages = Language::find($id);


        if (empty($languages)) {
            return 'URL NOT FOUND';
        }
        $languages = Language::find($id);
        $result = [
            'languages' => $languages,
            // 'countriesArray' => $countriesArray,
            // 'currencyArray' => $currencyArray
        ];
        //dd($faqs );
        return view('admin.languages.edit', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $languageid)
    {

        $id = base64_decode($languageid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $languages = Language::findOrFail($id);

        if (empty($languages)) {
            return 'URL NOT FOUND';
        }



        $input = $request->all();
        $request->validate([
            'title' => 'required|max:255',
            'status' => 'required',

        ]);

        $languages->fill($input)->save();

        return redirect()->action('Admin\LanguageController@index')->with('alert-success', 'Language Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($languageid)
    {
        $id = base64_decode($languageid);
        Language::find($id)->delete();



        return redirect()->action('Admin\LanguageController@index')->with('success', 'Language Deleted Successfully');
    }
    /**
     * Status
     */
    public function status($ids, $status)
    {
        $ids = base64_decode($ids);
        $languages =  Language::find($ids);
        if (empty($languages)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);

        $languages->fill($input)->save();

        return redirect()->action('Admin\LanguageController@index')->with('alert-success', 'Language Status Updated Successfully');
    }

    public function updateAdminLanguage($defultLaguage = null)
    {
        if ($defultLaguage != null)
            session(['adminLanguage' => $defultLaguage]);
        return response()->json(['status' => 'success', 'message' => 'Language updated', 'defultLaguage' => $defultLaguage]);
    }
}
