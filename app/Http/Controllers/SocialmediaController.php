<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SocialmediaController extends Controller
{
   public function index()
    {
    	return view('admin.add_socialmedia');
    }
//view all data 
    public function all_socialmedia()
    {
    	$socialmedia=DB::Select('SELECT * from tbl_socialmedia');
    	return view('admin/all_socialmedia')->with('all_socialmedia',$socialmedia);
    }
//save data 
    public function save_socialmedia(Request $request)
    {
    	$socialmedia_mobileno=$request->input('socialmedia_mobileno');
    	$socialmedia_email=$request->input('socialmedia_email');
    	$socialmedia_google=$request->input('socialmedia_google');
    	$socialmedia_facebook=$request->input('socialmedia_facebook');
    	$socialmedia_linkedin=$request->input('socialmedia_linkedin');
    	$socialmedia_twitter=$request->input('socialmedia_twitter');
    	$socialmedia_other=$request->input('socialmedia_other');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_socialmedia values(?,?,?,?,?,?,?,?,?,?,?)",[null,$socialmedia_mobileno,$socialmedia_email,$socialmedia_google,$socialmedia_facebook,$socialmedia_linkedin,$socialmedia_twitter,$socialmedia_other,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-socialmedia');
    	}
    	else
    	{
			return view('/add-socialmedia');
    	}
    }
//dalete selected data 
    public function delete_socialmedia($id)
    {
    	$delete=DB::Delete("DELETE From tbl_socialmedia WHERE socialmedia_id='$id'");

    	return redirect('/all-socialmedia');
    }


    public function unactive_socialmedia($socialmedia_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_socialmedia SET publication_status='$publication_status_value' WHERE socialmedia_id='$socialmedia_id'");

        return redirect('/all-socialmedia');
    }
    public function active_socialmedia($socialmedia_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_socialmedia SET publication_status='$publication_status_value' WHERE socialmedia_id='$socialmedia_id'");

        return redirect('/all-socialmedia');
    }
    public function edit_socialmedia($socialmedia_id)
    {
        $select=DB::select("SELECT * from tbl_socialmedia  WHERE socialmedia_id='$socialmedia_id'");

        return view('/admin/edit_socialmedia')->with('selected_socialmedia',$select);
        // return view('admin.edit_socialmedia');
    }
    public function update_socialmedia(Request $request,$socialmedia_id)
    {
        $socialmedia_mobileno=$request->input('socialmedia_mobileno');
    	$socialmedia_email=$request->input('socialmedia_email');
    	$socialmedia_google=$request->input('socialmedia_google');
    	$socialmedia_facebook=$request->input('socialmedia_facebook');
    	$socialmedia_linkedin=$request->input('socialmedia_linkedin');
    	$socialmedia_twitter=$request->input('socialmedia_twitter');
    	$socialmedia_other=$request->input('socialmedia_other');
    	$publication_status=$request->input('publication_status');


        $update=DB::update("UPDATE tbl_socialmedia SET socialmedia_mobileno='$socialmedia_mobileno',socialmedia_email='$socialmedia_email',socialmedia_google='$socialmedia_google',socialmedia_facebook='$socialmedia_facebook',socialmedia_linkedin='$socialmedia_linkedin',socialmedia_twitter='$socialmedia_twitter',socialmedia_other='$socialmedia_other' WHERE socialmedia_id='$socialmedia_id'");

        return redirect('/all-socialmedia');
    }
}
