@extends('layouts/master')

@section('title', $title)

@section('content')
  <h1>Hun verhaal</h1>
  @foreach ($testimonials as $testimonial)
    <div class="card">
      <div class="card-title">{{ $testimonial->title }}</div>
      <div class="card-body">{!! $testimonial->body !!}</div>
    </div>
  @endforeach
@endsection
