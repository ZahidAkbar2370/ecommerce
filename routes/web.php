<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend Routes
Route::get('/','HomeController@index' );
Route::get('/view-product-by-category/{category_name}','HomeController@view_product_by_category' );
Route::get('/view-product-by-manufacture/{manufacture_name}','HomeController@view_product_by_manufacture' );
Route::get('/view_product/{product_id}','HomeController@view_product_index' );
Route::get('contact','HomeController@contact');

Route::post('/add-to-cart',"CartController@add_to_cart");
Route::get('/add-cart',"CartController@view_cart");

Route::get('/out-cart',"CartController@view_out_cart");
Route::post('/out-cart',"CartController@add_out_cart");




			// User Routes

// Contact Route
Route::get('/contact','HomeController@contact' );
Route::post('/message','HomeController@message' );

// 





					// Admin Routes


// Backend Routes
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');


// Category Routes
Route::get('/add-category','CategoryController@index');//add form
Route::get('/all-category','CategoryController@all_category');//view all category
Route::post('/save-category','CategoryController@save_category');//add values submit
Route::get('/delete-category/{id}','CategoryController@delete_category');//delete category
Route::get('/edit-category/{category_id}','CategoryController@edit_category');//edit category
Route::post('/update-category/{category_id}','CategoryController@update_category');//update category value
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');//chenge update status
Route::get('/active_category/{category_id}','CategoryController@active_category');//chenge update status

// manufacture Routes
Route::get('/add-manufacture','ManufactureController@index');//add form
Route::get('/all-manufacture','ManufactureController@all_manufacture');//view all manufacture
Route::post('/save-manufacture','ManufactureController@save_manufacture');//add values submit
Route::get('/delete-manufacture/{id}','ManufactureController@delete_manufacture');//delete manufacture
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');//edit manufacture
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');//update manufacture value
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');//chenge update status
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');//chenge update status


// product Routes
Route::get('/add-product','ProductController@index');//add form
Route::get('/all-product','ProductController@all_product');//view all product
Route::post('/save-product','ProductController@save_product');//add values submit
Route::get('/delete-product/{id}','ProductController@delete_product');//delete product
Route::get('/edit-product/{product_id}','ProductController@edit_product');//edit product
Route::post('/update-product/{product_id}','ProductController@update_product');//update product value
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');//chenge update status
Route::get('/active_product/{product_id}','ProductController@active_product');//chenge update status


// slider Routes
Route::get('/add-slider','SliderController@index');//add form
Route::get('/all-slider','SliderController@all_slider');//view all slider
Route::post('/save-slider','SliderController@save_slider');//add values submit
Route::get('/delete-slider/{id}','SliderController@delete_slider');//delete slider
Route::get('/edit-slider/{slider_id}','SliderController@edit_slider');//edit slider
Route::post('/update-slider/{slider_id}','SliderController@update_slider');//update slider value
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');//chenge update status
Route::get('/active_slider/{slider_id}','SliderController@active_slider');//chenge update status



// socailmedia Routes
Route::get('/add-socialmedia','SocialmediaController@index');//add form
Route::get('/all-socialmedia','SocialmediaController@all_socialmedia');//view all socialmedia
Route::post('/save-socialmedia','SocialmediaController@save_socialmedia');//add values submit
Route::get('/delete-socialmedia/{id}','SocialmediaController@delete_socialmedia');//delete socialmedia
Route::get('/edit-socialmedia/{socialmedia_id}','SocialmediaController@edit_socialmedia');//edit socialmedia
Route::post('/update-socialmedia/{socialmedia_id}','SocialmediaController@update_socialmedia');//update socialmedia value
Route::get('/unactive_socialmedia/{socialmedia_id}','SocialmediaController@unactive_socialmedia');//chenge update status
Route::get('/active_socialmedia/{socialmedia_id}','SocialmediaController@active_socialmedia');//chenge update status


// Messages Routes
Route::get('/all-message','MessageController@index');
Route::get('/delete-message/{message_id}','MessageController@delete_message');
