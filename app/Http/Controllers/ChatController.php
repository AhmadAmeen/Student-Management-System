<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chat;

class ChatController extends Controller
{
    public function getChats() {
      $chat = chat::get();
      print_r ($chat);
    }
}
