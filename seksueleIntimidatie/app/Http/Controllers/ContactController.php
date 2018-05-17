<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public $color = 'red';

    public function index(){
      return view('contact.index', ['title' => 'Waar kan je terecht?', 'color' => $this->color]);
    }
}
