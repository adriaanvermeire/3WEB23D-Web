<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatController extends Controller
{
    public $color = 'yellow';

    public function index(){
      return view('what.index', ['title' => 'Wat is seksuele intimidatie?', 'color' => $this->color]);
    }

    public function showSection($section){
      return view('test', ['title' => $section, 'color' => $this->color]);
    }
}
