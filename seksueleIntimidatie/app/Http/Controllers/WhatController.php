<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatController extends Controller
{
    public $color = 'yellow';
    public $title = 'Wat is seksuele intimidatie?';

    public function index()
    {
      $data = [
        'title' => $this->title, 
        'color' => $this->color,
      ];
      return view('what.index', $data);
    }
}
