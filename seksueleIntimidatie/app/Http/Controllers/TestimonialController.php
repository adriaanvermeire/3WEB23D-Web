<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
  public $color = 'green';

  public function index(){
    $highlight = Testimonial::where('highlight', 1)->first();
    $testimonials = Testimonial::where(['published' => 1, 'highlight' => 0])->get();
    $data = [
      'highlight' => $highlight,
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

    $testimonial->save();
    return view('testimonials.success', $data);
  }

  function accept_testimonial($id){
    $test = Testimonial::find($id);

    $test->published = true;
    $test->save();

    return redirect()->route('admin.testimonials');
  }

  function reject_testimonial($id){
    $test = Testimonial::find($id);

    $test->published = false;
    $test->save();

    return redirect()->route('admin.testimonials');
  }

  function highlight($id) {
    $current = Testimonial::where('highlight', 1)->first();
    if(isset($current)){
      $current->highlight = false;
      $current->save();
    }
    if (!isset($current) || $id != $current->id) {
      $new = Testimonial::find($id);
      $new->highlight = true;
      $new->save();
    }
    return redirect()->route('admin.testimonials');
  }

  function review($id){
    $testimonial = Testimonial::findOrFail($id);

    $data = [
      'testimonial' => $testimonial,
      'admin' => true,
      'title' =>'Admin | Verhaal Review',
      'color' => 'primary',
      'no_footer' => true,
    ];

    return view('testimonials.review', $data);
  }
}
