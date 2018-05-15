<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public $color = 'blue';

    public function index(){
      return view('test', ['title' => 'Hoe reageren?', 'color' => $this->color]);
    }
}
