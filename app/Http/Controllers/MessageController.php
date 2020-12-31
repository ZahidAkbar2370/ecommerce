<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessageController extends Controller
{
//view all msg on admin panel    
   public function index()
    {
        $message=DB::Select("SELECT * from tbl_message");
    	return view('admin/all_message')->with('all_messages',$message);
    }
//dalete selected msg    
    public function delete_message($message_id)
    {
        $delete_message=DB::Delete("DELETE From tbl_message WHERE message_id='$message_id'");
        return redirect('/all-message');
    }
    
}
