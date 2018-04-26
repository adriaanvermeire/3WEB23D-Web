<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatController extends Controller
{
    function index(){
      return view('test', ['title' => 'Wat is het?']);
    }

    function showSection($section){
      return view('test', ['title' => $section]);
    }
}
