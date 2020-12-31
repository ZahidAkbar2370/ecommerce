<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class CartController extends Controller
{
   public function add_to_cart(Request $request)
   {
   		$product_id=$request->input('product_id');
   		$product_price=$request->input('product_price');
   		$product_name=$request->input('product_name');
   		$product_quantity=$request->input('product_quantity');

   		$insert=DB::insert('insert into tbl_add__cart values(?,?,?,?,?,?,?,?,?)',[null,$product_id,$product_name,$product_quantity,$product_price,$product_price,"pending",null,null]);
   		
   		return redirect('/add-cart');
   }
   public function view_cart(Request $request)
   {
   		 $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $all_cart=DB::Select("SELECT * from tbl_add__cart WHERE add_to_cart_status='pending'");
        return view('pages.add_to_cart')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias)->with('all_carts',$all_cart);
   }
   public function view_out_cart(Request $request)
   {
       $manufacture=DB::Select('SELECT * from tbl_manufacture');
        $category=DB::Select('SELECT * from tbl_category');
        $product=DB::Select('SELECT * from tbl_product');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $all_out_cart=DB::Select("SELECT * from tbl_add__cart WHERE add_to_cart_status='Done'");
        return view('pages.out_to_cart')->with('all_manufacture',$manufacture)->with('all_category',$category)->with('all_product',$product)->with('all_slider',$slider)->with('all_socialmedia',$socialmedias)->with('all_out_carts',$all_out_cart);
   }
   public function add_out_cart(Request $request)
   {
    $web_id=$request->input('web_id');

    $update=DB::UPDATE("UPDATE tbl_add__cart SET add_to_cart_status='Done' WHERE add_cart_web_id='$web_id'");

    return redirect('/add-cart');
     
   }
}
