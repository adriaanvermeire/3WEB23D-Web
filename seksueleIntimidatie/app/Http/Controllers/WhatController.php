<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class WhatController extends Controller
{
    public $color = 'yellow';

    public function index(){
      $content = Content::where('page', 'what')->get();
      return view('what.index', ['content' => $content,'title' => 'Wat is seksuele intimidatie?', 'color' => $this->color]);
    }

    public function showSection($section){
      return view('test', ['title' => $section, 'color' => $this->color]);
    }
}
