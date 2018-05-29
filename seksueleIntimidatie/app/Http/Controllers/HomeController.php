<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){
      $colors = ['red', 'yellow', 'blue', 'green'];
      $color = $colors[array_rand($colors)];
      return view('index', ['no_footer' => true, 'color' => $color]);
    }
}
