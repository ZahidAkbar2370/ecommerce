<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ManufactureController extends Controller
{
   public function index()
    {
    	return view('admin.add_manufacture');
    }
//view all data    
    public function all_manufacture()
    {
    	$manufacture=DB::Select('SELECT * from tbl_manufacture');
    	return view('admin/all_manufacture')->with('all_manufactures',$manufacture);
    }
//save data    
    public function save_manufacture(Request $request)
    {
    	$manufacture_name=$request->input('manufacture_name');
    	$manufacture_description=$request->input('manufacture_description');
    	$publication_status=$request->input('publication_status');

    	$result=DB::insert("INSERT into tbl_manufacture values(?,?,?,?,?,?)",[null,$manufacture_name,$manufacture_description,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-manufacture');
    	}
    	else
    	{

    		return view('/add-manufacture');
    	}
    }
//delete selected data    
    public function delete_manufacture($id)
    {
    	$delete=DB::Delete("DELETE From tbl_manufacture WHERE manufacture_id='$id'");

    	return redirect('/all-manufacture');
    }
// change publication to unactive

    public function unactive_manufacture($manufacture_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_manufacture SET publication_status='$publication_status_value' WHERE manufacture_id='$manufacture_id'");

        return redirect('/all-manufacture');
    }
// change publication to active    
    public function active_manufacture($manufacture_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_manufacture SET publication_status='$publication_status_value' WHERE manufacture_id='$manufacture_id'");

        return redirect('/all-manufacture');
    }
//edit selected data    
    public function edit_manufacture($manufacture_id)
    {
        $select=DB::select("SELECT * from tbl_manufacture  WHERE manufacture_id='$manufacture_id'");

        return view('/admin/edit_manufacture')->with('selected_manufacture',$select);
        // return view('admin.edit_manufacture');
    }
//update selected data    
    public function update_manufacture(Request $request,$manufacture_id)
    {
        $manufacture_name=$request->input('manufacture_names');
        $manufacture_description=$request->input('manufacture_descriptions');
        $update=DB::update("UPDATE tbl_manufacture SET manufacture_name='$manufacture_name',manufacture_description='$manufacture_description'  WHERE manufacture_id='$manufacture_id'");

        return redirect('/all-manufacture');
    }
    
}
