<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\FaqCategory;
use App\Models\FaqsLang;
use Illuminate\Support\Facades\DB;
use URL;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $breadcrumb = [
            ["name" => "Faqs", "url" => route("admin.faqs"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],
        ];

        populate_breadcrumb($breadcrumb);

        $query = Faqs::orderBy('id', 'DESC')->with('langFaq');
        $query = getFilter(Faqs::class, $query, $request->all());

        $faqs = $query->paginate(10);

        $faqs = chnageColumnAccordingToLanguage($faqs, 'langFaq', ['title', 'description']);

        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = [
            ["name" => "Add Faq", "url" => route("admin.faqs"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        // $faqs = Faqs::all();
        $languageslisting = DB::table('languages')->groupBy('title')->get();
        $faqcategories = FaqCategory::get();
        return view('admin.faqs.create', compact('faqcategories', 'languageslisting'));
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
        $faqs = Faqs::create($input);
        $input['faqs_id'] = $faqs->id;
        $input['lang'] = getDefultAdminLanguage();
        if ($faqs->id != '') {
            FaqsLang::create($input);
        }

        return redirect()->action('Admin\FaqController@index')->with('alert-success', 'Faq Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($faqid = null)
    {
        $breadcrumb = [
            ["name" => "Edit Faq", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);

        $id = base64_decode($faqid);

        if ($id == '') {
            return 'URL NOT FOUND';
        }
        $languageslisting = DB::table('languages')->groupBy('title')->get();
        $faqs = Faqs::with('langFaq')->find($id);

        $faqs = chnageColumnAccordingToLanguage($faqs, 'langFaq', ['title', 'description']);

        if (empty($faqs)) {
            return 'URL NOT FOUND';
        }

        return view('admin.faqs.edit', compact('faqs', 'languageslisting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $faqid)
    {

        $id = base64_decode($faqid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }
        $faqs = Faqs::findOrFail($id);

        if (empty($faqs)) {
            return 'URL NOT FOUND';
        }

        $input = $request->all();
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
        ]);

        if (getDefultAdminLanguage() == env('DEFULT_LANG_CODE'))
            $faqs->fill($input)->save();

        $input['faqs_id'] = $faqs->id;
        $input['lang'] = getDefultAdminLanguage();
        $faqslang = DB::table('faqs_lang')->get();

        $details = array();
        foreach ($faqslang as $faqslangAllitem) {
            $details['faqs_id'] = $faqslangAllitem->faqs_id;
        }

        if ($faqs->id == $details['faqs_id'] && $faqs->lang == $input['lang']) {
            $matchThese = ['faqs_id' => $faqs->id, 'lang' => $input['lang']];
            $report = FaqsLang::where($matchThese)->first();
            $report->fill($input)->save();
        } else {
            FaqsLang::create($input);
        }

        return redirect()->action('Admin\FaqController@index')->with('alert-success', 'Faq Updated Successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($faqid)
    {
        $id = base64_decode($faqid);
        $faqs = Faqs::find($id);
        FaqsLang::where('faqs_id', $faqs->id)->delete();
        $faqs = Faqs::find($id)->delete();

        return redirect()->action('Admin\FaqController@index')->with('success', 'Faq Deleted Successfully');
    }
    /**
     * Status
     */
    public function status($ids, $status)
    {
        $ids = base64_decode($ids);
        $faqs =  Faqs::find($ids);
        if (empty($faqs)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);

        $faqs->fill($input)->save();

        return redirect()->action('Admin\FaqController@index')->with('alert-success', 'Faq Status Updated Successfully');
    }
}
