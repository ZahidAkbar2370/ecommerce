<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function index()
    {
    	return view('admin_login');
    }
    public function show_dashboard()
    {
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
    	$admin_email=$request->input('admin_email');
    	$admin_password=$request->input('admin_password');

    	$result=DB::select("SELECT * from tbl_admin WHERE admin_email='$admin_email' and admin_password='$admin_password'");
    	if($result)
    	{
    		return redirect('/dashboard');
    	}
    	else
    	{
    		return redirect('/admin');
    	}

    }
}

