<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
  public $color = 'green';

  public function index(){
    $testimonials = Testimonial::where('published', 1)->get();
    $data = [
      'testimonials' => $testimonials,
      'title'=>'Hun verhaal',
      'color' => $this->color,
    ];

    return view('testimonials.index', $data);
  }

  public function create(){
    return view('testimonials.create', ['title'=>'Mijn verhaal', 'color' => $this->color]);
  }

  public function show($id){
    $testimonial = Testimonial::findOrFail($id);

    $data = [
      'testimonial' => $testimonial,
      'title'=>'Mijn verhaal',
      'color' => $this->color,
    ];

    return view('testimonials.show', $data);
  }

  public function post(Request $request){
    $testimonial = new Testimonial();

    $testimonial->email = $request->email;
    $testimonial->title = $request->title;
    $testimonial->body = $request->body;
    $testimonial->published = true;

    $testimonial->save();
    return redirect()->route('testimonials.index');
  }
}
