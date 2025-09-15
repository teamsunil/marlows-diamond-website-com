<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Reviews;
use App\Models\ReviewsLang;
use Illuminate\Support\Facades\DB;
use URL;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $breadcrumb = [
            ["name" => "Reviews", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
		$reviews = Reviews::all();
        $reviews = chnageColumnAccordingToLanguage($reviews, 'langReview', ['title', 'description']);
		return view('admin.reviews.index', compact('reviews'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        
        $breadcrumb = [
            ["name" => "Add Review", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $reviews = Reviews::all();
       
        return view('admin.reviews.create',compact('reviews'));
	}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request){


        $input = $request->all();
		 $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
			
        ]);
        
		$reviews = Reviews::create($input);

        return redirect()->action('Admin\ReviewController@index')->with('alert-success', 'Review Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($reviewid=null){
       
        $breadcrumb = [
            ["name" => "Edit Review", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
		
		$id = base64_decode($reviewid);
		if ($id == '') {
            return 'URL NOT FOUND';
        }
		
		$reviews = Reviews::find($id);
		if (empty($reviews)) {
            return 'URL NOT FOUND';
        }
        $reviews = Reviews::find($id);
        $reviews = chnageColumnAccordingToLanguage($reviews, 'langReview', ['title', 'description']);
        return view('admin.reviews.edit',compact('reviews'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $reviewid) {
        
		$id = base64_decode($reviewid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $reviews = Reviews::findOrFail($id);

        if (empty($reviews)) {
            return 'URL NOT FOUND';
        }

       

        $input = $request->all();
		$request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
			
        ]);
		
        if (getDefultAdminLanguage() == env('DEFULT_LANG_CODE'))
        $reviews->fill($input)->save();

        $input['reviews_id'] = $reviews->id;
        $input['lang'] = getDefultAdminLanguage();
        $Reviwslang = DB::table('review_lang')->get();
        $details = array();
        foreach ($Reviwslang as $ReviewlangAllitem) {
            $details['reviews_id'] = $ReviewlangAllitem->reviews_id;
        }
        // dd(isset($details['review_id']) && $reviews->id == $details['review_id'] && $reviews->lang == $input['lang']);
        if (isset($details['reviews_id']) && $reviews->id == $details['reviews_id'] && $reviews->lang == $input['lang']) {
            $matchThese = ['reviews_id' => $reviews->id, 'lang' => $input['lang']];
            $report = ReviewsLang::where($matchThese)->first();
            $report->fill($input)->save();
        } else {
            ReviewsLang::create($input);
        }

        return redirect()->back()->with('alert-success', 'Review Updated Successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($reviewid) {
        $id = base64_decode($reviewid);
        Reviews::find($id)->delete(); 
		return redirect()->action('Admin\ReviewController@index')->with('alert-success', 'Review Deleted Successfully');
    }
	 /**
     * Status
     */
	public function status($ids,$status) { 
        $ids = base64_decode($ids);       
        $reviews =  Reviews::find($ids);
        if (empty($reviews)) {
            return 'URL NOT FOUND';
        }

        $input['status'] = $status;
        unset($input['_token']);
        
        $reviews->fill($input)->save();

        return redirect()->action('Admin\ReviewController@index')->with('alert-success', 'Review Status Updated Successfully');
    }
}
