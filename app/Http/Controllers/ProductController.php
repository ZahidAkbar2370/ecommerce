<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
   public function index()
    {
        $category=DB::select('SELECT * from tbl_category');
        $manufacture=DB::select('SELECT * from tbl_manufacture');
        return view('admin.add_product')->with('all_category',$category)->with('all_manufacture',$manufacture);
    }
//view all data    
    public function all_product()
    {
    	$product=DB::Select('SELECT * from tbl_product');
    	return view('admin/all_product')->with('all_products',$product);
    }
//save data     
    public function save_product(Request $request)
    {
    	$product_name=$request->input('product_name');
    	$category_name=$request->input('category_name');
    	$manufacture_name=$request->input('manufacture_name');
    	$product_short_description=$request->input('product_short_description');
    	$product_long_description=$request->input('product_long_description');
    	$product_price=$request->input('product_price');
    	$product_image=$request->input('product_image');
    	$product_size=$request->input('product_size');
    	$product_color=$request->input('product_color');
    	$publication_status=$request->input('publication_status');


    	$result=DB::insert("INSERT into tbl_product values(?,?,?,?,?,?,?,?,?,?,?,?,?)",[null,$category_name,$manufacture_name,$product_name,$product_short_description,$product_long_description,$product_price,$product_image,$product_size,$product_color,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/add-product');
    	}
    	else
    	{

    		return view('/add-product');
    	}
    }
//delete selected data 
    public function delete_product($id)
    {
    	$delete=DB::Delete("DELETE From tbl_product WHERE product_id='$id'");

    	return redirect('/all-product');
    }

// change publication to unactive
    public function unactive_product($product_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_product SET publication_status='$publication_status_value' WHERE product_id='$product_id'");

        return redirect('/all-product');
    }
// change publication to active    
    public function active_product($product_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_product SET publication_status='$publication_status_value' WHERE product_id='$product_id'");

        return redirect('/all-product');
    }
//edit selected data 
    public function edit_product($product_id)
    {
        $select=DB::select("SELECT * from tbl_product  WHERE product_id='$product_id'");

        return view('/admin/edit_product')->with('selected_product',$select);
        // return view('admin.edit_product');
    }
//update selected data 
    public function update_product(Request $request,$product_id)
    {
        $product_name=$request->input('product_name');
    	$category_id=$request->input('category_name');
    	$manufacture_id=$request->input('manufacture_name');
    	$product_short_description=$request->input('product_short_description');
    	$product_long_description=$request->input('product_long_description');
    	$product_price=$request->input('product_price');
    	$product_image=$request->input('product_image');
    	$product_size=$request->input('product_size');
    	$product_color=$request->input('product_color');
    	$publication_status=$request->input('publication_status');


        $update=DB::update("UPDATE tbl_product SET product_name='$product_name',category_id='$category_id',manufacture_id='$manufacture_id',product_short_description='$product_short_description',product_long_description='$product_long_description',product_color='$product_color',product_size='$product_size'  WHERE product_id='$product_id'");

        return redirect('/all-product');
    }
}
