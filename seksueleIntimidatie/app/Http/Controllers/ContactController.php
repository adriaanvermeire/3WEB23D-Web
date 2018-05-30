<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContactController extends Controller
{
    public $color = 'red';

    public function index(){
      $content = Content::all();

      return view('contact.index', ['content' => $content, 'title' => 'Waar kan je terecht?', 'color' => $this->color]);
    }
}
