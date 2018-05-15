<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhatSection;

class AdminController extends Controller
{
    //
    function index()
    {
      $sections = WhatSection::all();

      return view("admin.index")->with(["sections" => $sections, "color" => 'yellow']);
    }

    function login()
    {
      return view('admin.login');
    }

    function create_section(Request $request){
      // Add Validation

      $section = new WhatSection();
      $section->title = $request->title;
      $section->body = ltrim($request->body);

      $section->save();

      return redirect()->route('admin.index');
    }

    function toggle_published(Request $request){
      $section = WhatSection::find($request->id);

      $section->published = !$section->published;
      $section->save();

      return redirect()->route('admin.index');
    }
}
