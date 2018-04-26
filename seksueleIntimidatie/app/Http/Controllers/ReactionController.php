<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactionController extends Controller
{
    function index(){
      return view('test', ['title', 'Hoe reageren?']);
    }
}
