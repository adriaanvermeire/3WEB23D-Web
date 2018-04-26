<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
  function index(){
    return view('test', ['title'=>'Hun verhaal']);
  }

  function create(){
    return view('test', ['title'=>'Mijn verhaal']);
  }

  function post(){

  }
}
