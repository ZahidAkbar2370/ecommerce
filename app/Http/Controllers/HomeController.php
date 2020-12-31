<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
//view data run time on use panel    
    public function index()
    {
    	$manufacture=DB::Select('SELECT * from tbl_manufacture');
    	$category=DB::Select('SELECT * from tbl_category');
    	$product=DB::Select('SELECT * from tbl_product');
    	$slider=DB::Select('SELECT * from tbl_slider');
    	$socialmedias=DB::Select('SELECT * from tbl_socialmedia');

    	return view('pages.home_content')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias);
    	// return view('pages.home_content');
    }
//user view contact form    
    public function contact()
    {
        $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');

        return view('pages.contact')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias);
    	// return view('pages.contact');
    }
//user send msg to admin panel    
    public function message(Request $request)
    {
    	$name=$request->input('name');
    	$email=$request->input('email');
    	$message=$request->input('message');

    	$result=DB::insert("INSERT into tbl_message values(?,?,?,?,?,?)",[null,$name,$email,$message,null,null]);

    	if($result)
    	{
    		return redirect('/contact')->with('messages',"Message Sent Successfully");
    	}
    	else
    	{

    		return redirect('/contact');
    	}

    }
    public function view_product_index($product_id)
    {
        $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $view_products=DB::Select("SELECT * from tbl_product WHERE product_id='$product_id'");

        return view('pages.view_product')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias)->with('view_products',$view_products);
    }
    public function view_product_by_manufacture($manufacture_name)
    {
        // echo $category_name;
        $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $view_products=DB::Select("SELECT * from tbl_product WHERE manufacture_id='$manufacture_name'");

        return view('pages.view_product_by_manufacture')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias)->with('view_products',$view_products);
    }
    public function view_product_by_category($category_name)
    {
        // echo $category_name;
        $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $view_products=DB::Select("SELECT * from tbl_product WHERE category_id='$category_name'");

        return view('pages.view_product_by_category')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias)->with('view_products',$view_products);
    }
}
