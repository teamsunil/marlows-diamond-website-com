<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\CustomerLang;
use Illuminate\Support\Facades\DB;

use URL;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = User::where('user_role',3)->latest()->get();
		// return response()->json($getData);
		$breadcrumb = [
            ["name" => "User", "url" => route("admin.users"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $getData = chnageColumnAccordingToLanguage($getData, 'langCustomer', ['name', 'username','nicename' ]);
		$result = [
            'getData'=>$getData,
        ];
       
		return view('admin.users.index',$result);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $breadcrumb = [
            ["name" => "Add User", "url" => route("admin.users"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
        $users = User::all();
        
        
        return view('admin.users.create',compact('users'));
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
            'name' => 'required|max:255',
            'username' => 'required',
			'is_active' => 'required',
			'password' => 'min:6|required_with:confirm_password|same:confirm_password',
			'confirm_password' => 'min:6',
            
			
        ]);
		
		

        try {
            $input['user_role'] = 3;
            $input['password'] = bcrypt($request->password);
            $users = User::create($input);
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                return redirect()->action('Admin\UserController@create')->with('alert-danger', 'Duplicate Entry');
            }
        }

        return redirect()->action('Admin\UserController@index')->with('alert-success', 'User Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($userid=null){
        $breadcrumb = [
            ["name" => "Edit User", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];
        populate_breadcrumb($breadcrumb);
		
		$id = base64_decode($userid);
		if ($id == '') {
            return 'URL NOT FOUND';
        }
		
		$users = User::find($id);
		if (empty($users)) {
            return 'URL NOT FOUND';
        }
        $users = User::find($id);
        $users = chnageColumnAccordingToLanguage($users, 'langCustomer', ['name', 'username','nicename' ]);
        return view('admin.users.edit',compact('users'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $userid) {
        
		$id = base64_decode($userid);
        if ($id == '') {
            return 'URL NOT FOUND';
        }

        $users = User::findOrFail($id);

        if (empty($users)) {
            return 'URL NOT FOUND';
        }

       

        $input = $request->all();
		
		// echo "<pre>";
		// print_r($input);
		// die;
		
		// $request->validate([
            // 'name' => 'required|max:255',
            // 'description' => 'required',
            // 'status' => 'required',
			
        // ]);
		
        // $users->fill($input)->save();

        if (getDefultAdminLanguage() == env('DEFULT_LANG_CODE'))
        $users->fill($input)->save();
    
        $input['user_id'] = $users->id;
        $input['lang'] = getDefultAdminLanguage();
        $Customerlang = DB::table('customer_lang')->get();
     
        $details = array();
        foreach ($Customerlang as $CustomerlangAllitem) {
            $details['user_id'] = $CustomerlangAllitem->user_id;
        }
        // dd(isset($details['review_id']) && $reviews->id == $details['review_id'] && $reviews->lang == $input['lang']);
        if (isset($details['user_id']) && $users->id == $details['user_id'] && $users->lang == $input['lang']) {
            $matchThese = ['user_id' => $users->id, 'lang' => $input['lang']];
            $report = CustomerLang::where($matchThese)->first();
            $report->fill($input)->save();
        } else {
            CustomerLang::create($input);  
        }

        return redirect()->action('Admin\UserController@index')->with('alert-success', 'User Updated Successfully');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($userid) {
        $id = base64_decode($userid);
        User::find($id)->delete(); 
		return redirect()->action('Admin\UserController@index')->with('alert-success', 'User Deleted Successfully');
    }
	 /**
     * Status
     */
	public function status($ids,$status) { 
        $ids = base64_decode($ids);       
        $users =  User::find($ids);
        if (empty($users)) {
            return 'URL NOT FOUND';
        }

        $input['is_active'] = $status;
        unset($input['_token']);
        
        $users->fill($input)->save();

        return redirect()->action('Admin\UserController@index')->with('alert-success', 'User Status Updated Successfully');
    }
}
