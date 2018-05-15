<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public $color = 'red';

    public function index(){
      return view('test', ['title' => 'Contact', 'color' => $this->color]);
    }
    public function onlineChats(){
      return view('test', ['title' => 'Online Chats', 'color' => $this->color]);
    }
    public function hotlines(){
      return view('test', ['title' => 'Meldpunten', 'color' => $this->color]);
    }
}
