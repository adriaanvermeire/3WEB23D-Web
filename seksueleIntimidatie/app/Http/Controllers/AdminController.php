<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhatSection;
use App\Testimonial;

class AdminController extends Controller
{

    public $color = 'primary';
    public $no_footer = true;
    function index()
    {
      $unseen = Testimonial::whereRaw('created_at == updated_at')->get();
      $seen = Testimonial::whereRaw('created_at != updated_at')->get();
      $data = [
        'unseen' => $unseen,
        'seen' => $seen,
        'color' => $this->color,
        'no_footer' => $this->no_footer,
      ];

      return view("admin.index", $data);
    }

    function what()
    {
      $sections = WhatSection::all();

      $data = [
        'no_footer' => $this->no_footer,
        "sections" => $sections,
        "color" => $this->color,
      ];

      return view("admin.index", $data);
    }

    function login()
    {
      return view('admin.login', ['no_footer' => $this->no_footer]);
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

    // Testimonials

    function testimonials(){
      $unseen = Testimonial::whereRaw('created_at == updated_at')->get();
      $seen = Testimonial::whereRaw('created_at != updated_at')->orderBy('published', 'desc')->get();

      $data = [
        'unseen' => $unseen,
        'seen' => $seen,
        'color' => $this->color,
        'no_footer' => $this->no_footer,
      ];
      return view('admin.testimonials', $data);
    }
}
