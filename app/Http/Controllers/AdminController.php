<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\chat;
use Session;

class AdminController extends Controller
{
  public function adminlogin() {
    return view('adminlogin');
  }

  public function adminlogout() {
    Session::flush();
    return redirect('/adminlogin');
  }

  public function adminloggedin(Request $request) {
    $admin = admin::where('username',$request->username)->where('password',$request->password)
    ->get()
    ->toArray();
    if ($admin) {
      $request->session()->put('admin_session', $admin[0]['id']);
      $request->session()->put('admin_name_session', $request->username);
      return redirect('studentregistrationform');
    } else {
      session::flash('coc', 'Email or Password is incorrect!');
      return redirect('adminlogin')->withinput();
    }
  }

  public function adminschat() {
    $admins = admin::get();
    return view('adminschat')->with('admins', $admins);
  }


    public function sendingmsg(Request $request) {
      console.log($request);
      $chat = new chat;
      $chat->sender_id = $request->sender_id;
      $chat->rec_id = $request->rec_id;
      $chat->messages = $request->messages;
      $chat->save();
    }

  public function chatwithadmin($sender_id, $rec_id) {
    $chats = chat::get();
    $sen_admin_det = admin::find($sender_id);
    $rec_id_det = admin::find($rec_id);
    $admins = admin::get();
    return view('chatwithadmin')
    ->with('sen_admin_det', $sen_admin_det)
    ->with('rec_admin_det', $rec_id_det)
    ->with('admins', $admins)
    ->with('chats', $chats);
  }
}
