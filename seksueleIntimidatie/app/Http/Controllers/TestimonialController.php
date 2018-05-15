<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
  public $color = 'green';

  public function index(){
    return view('test', ['title'=>'Hun verhaal', 'color' => $this->color]);
  }

  public function create(){
    return view('test', ['title'=>'Mijn verhaal', 'color' => $this->color]);
  }

  public function post(){

  }
}
