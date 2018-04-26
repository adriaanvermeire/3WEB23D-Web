<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
      return view('test', ['title' => 'Contact']);
    }
    function onlineChats(){
      return view('test', ['title' => 'Online Chats']);
    }
    function hotlines(){
      return view('test', ['title' => 'Meldpunten']);
    }
}
