<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Pages;
use App\Models\PagesLang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use File;

use URL;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumb = [
            ["name" => "Pages", "url" => route("admin.pages"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);



        $query = Pages::orderBy('id', 'DESC');
        $query = getFilter(Pages::class, $query, $request->all());

        $pages =  $query->paginate(10);
        $pages = chnageColumnAccordingToLanguage($pages, 'langPages', ['title', 'description']);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $breadcrumb = [
            ["name" => "Dashboard", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $templates = [];
        $files = File::allFiles(resource_path('views/front/pages/templates'));
        foreach ($files as $key => $value) {
            $explode = explode('.', $value->getfileName());
            $templates[$key]['value'] = $explode[0];
            $templates[$key]['name'] = ucwords(str_replace('_', ' ', $explode[0]));
        }
        $languageslisting = DB::table('languages')->groupBy('title')->get();
        $pages = Pages::all();
        return view('admin.pages.create', compact('pages', 'templates', 'languageslisting'));
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
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',

        ]);
        if ($request->hasFile('image')) {

            //$image_array = [];

            //foreach ($request->file('image') as $image) {

            $image = '';
            $image = single_storage_image_upload($request->file('image'), 'Post', '1200', '600');
            //}
        }

        if (empty($image)) {
            $input['image'] = '';
        } else {

            $input['image'] = $image;
        }



        $pages = Pages::create($input);

        $input['pages_id'] = $pages->id;
        $input['lang'] = getDefultAdminLanguage();
        if ($pages->id != '') {
            PagesLang::create($input);
        }

        return redirect()->action('Admin\PageController@index')->with('alert-success', 'Page Added Successfully');
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($pageid = null)
    {  

        $breadcrumb = [
            ["name" => "Dashboard", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $templates = [];
        $files = File::allFiles(resource_path('views/front/pages/templates'));
        foreach ($files as $key => $value) {
            $explode = explode('.', $value->getfileName());
            $templates[$key]['value'] = $explode[0];
            $templates[$key]['name'] = ucwords(str_replace('_', ' ', $explode[0]));
        }

        $id = base64_decode($pageid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $pages = Pages::find($id);
        if (empty($pages)) {
            return 'URL NOT FOUND';
        }
        //$pages = Pages::find($id);
        //dd($pages );
        $languageslisting = DB::table('languages')->groupBy('title')->get();
        $pages = Pages::with('langPages')->find($id);
        $pages = chnageColumnAccordingToLanguage($pages, 'langPages', ['title', 'description', 'subtitle', 'short_description', 'image']);
        return view('admin.pages.edit', compact('pages', 'templates', 'languageslisting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $pageid)
    {

        $id = base64_decode($pageid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $pages = Pages::findOrFail($id);

        if (empty($pages)) {
            return 'URL NOT FOUND';
        }



        $input = $request->all();
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',

        ]);
        /*image update*/
        if ($request->hasFile('image')) {

            //$image_array = [];

            //foreach ($request->file('image') as $image) {

            $image = '';
            $image = single_storage_image_upload($request->file('image'), 'Post', '1200', '600');
            //}
        }


        if (empty($image)) {
            //$input['image'] = '';
        } else {

            $input['image'] = $image;
        }
        if (getDefultAdminLanguage() == env('DEFULT_LANG_CODE'))
        $pages->fill($input)->save();
        $input['pages_id'] = $pages->id;
        $input['lang'] = getDefultAdminLanguage();
        $pageslang = DB::table('pages_lang')->get();

        $details = array();
        foreach ($pageslang as $faqslangAllitem) {
            $details['pages_id'] = $faqslangAllitem->pages_id;
        }

        if ($pages->id == $details['pages_id'] && $pages->lang == $input['lang']) {
            $matchThese = ['pages_id' => $pages->id, 'lang' => $input['lang']];
            $report = PagesLang::where($matchThese)->first();
            $report->fill($input)->save();
        } else {
            PagesLang::create($input);
        }

        return redirect()->back()->with('alert-success', 'Page Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $pageid)
    {
        $id = base64_decode($pageid);

        $record = Pages::where('id', $id)->first();
        
        if (!empty($record)) {

            if (!empty($request['revert']) && $request['revert'] == 'true') {
                $record->is_deleted = 0;
                $message = "Page restored from trash";
            } else {
                //PagesLang::where('pages_id', $record->id)->delete();
                $record->is_deleted = 1;
                $message = 'Page Deleted Successfully';
            }

            $record->save();
        }

        return redirect()->action('Admin\PageController@index')->with('success', $message);
    }
    /**
     * Status
     */
    public function status($ids, $status)
    {
        $ids = base64_decode($ids);
        $pages =  Pages::find($ids);
        if (empty($pages)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);

        $pages->fill($input)->save();

        return redirect()->action('Admin\PageController@index')->with('alert-success', 'Page Status Updated Successfully');
    }
}
