<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.add_category');
    }
    public function all_category()
    {
    	$category=DB::Select('SELECT * from tbl_category');
    	return view('admin.all_category')->with('all_categorys',$category);
    }
// save data
    public function save_category(Request $request)
    {
    	$category_name=$request->input('category_name');
    	$category_description=$request->input('category_description');
    	$publication_status=$request->input('publication_status');

    	$result=DB::insert("INSERT into tbl_category values(?,?,?,?,?,?)",[null,$category_name,$category_description,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-category');
    	}
    	else
    	{

    		return view('/all-category');
    	}
    }
//delete selected data 
    public function delete_category($id)
    {
    	$delete=DB::Delete("DELETE From tbl_category WHERE category_id='$id'");

    	return redirect('/all-category');
    }

// change publication to unactive
    public function unactive_category($category_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_category SET publication_status='$publication_status_value' WHERE category_id='$category_id'");

        return redirect('/all-category');
    }
// change publication to active    
    public function active_category($category_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_category SET publication_status='$publication_status_value' WHERE category_id='$category_id'");

        return redirect('/all-category');
    }
//edit selected data    
    public function edit_category($category_id)
    {
        $select=DB::select("SELECT * from tbl_category  WHERE category_id='$category_id'");

        return view('/admin/edit_category')->with('selected_category',$select);
        // return view('admin.edit_category');
    }
//Update selected data values    
    public function update_category(Request $request,$category_id)
    {
        $category_name=$request->input('category_names');
        $category_description=$request->input('category_descriptions');
        $update=DB::update("UPDATE tbl_category SET category_name='$category_name',category_description='$category_description'  WHERE category_id='$category_id'");

        return redirect('/all-category');
    }
}
