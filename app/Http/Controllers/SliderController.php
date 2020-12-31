<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
   public function index()
    {
    	return view('admin.add_slider');
    }
//view all data    
    public function all_slider()
    {
    	$slider=DB::Select('SELECT * from tbl_slider');
    	return view('admin/all_slider')->with('all_sliders',$slider);
    }
//save data 
    public function save_slider(Request $request)
    {
    	$slider_image=$request->input('slider_image');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_slider values(?,?,?,?,?)",[null,$slider_image,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-slider');
    	}
    	else
    	{
			return view('/add-slider');
    	}
    }
//delete selected data 
    public function delete_slider($id)
    {
    	$delete=DB::Delete("DELETE From tbl_slider WHERE slider_id='$id'");

    	return redirect('/all-slider');
    }

// change publication to unactive
    public function unactive_slider($slider_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_slider SET publication_status='$publication_status_value' WHERE slider_id='$slider_id'");

        return redirect('/all-slider');
    }
// change publication to active
    public function active_slider($slider_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_slider SET publication_status='$publication_status_value' WHERE slider_id='$slider_id'");

        return redirect('/all-slider');
    }
//edit selected data 
    public function edit_slider($slider_id)
    {
        $select=DB::select("SELECT * from tbl_slider  WHERE slider_id='$slider_id'");

        return view('/admin/edit_slider')->with('selected_slider',$select);
    }
//update selected data 
    public function update_slider(Request $request,$slider_id)
    {
        $slider_image=$request->input('slider_image');


        $update=DB::update("UPDATE tbl_slider SET slider_image='$slider_image' WHERE slider_id='$slider_id'");

        return redirect('/all-slider');
    }
}
