@extends('layouts/master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Hun verhaal</h1>
</div>
<div class="container mt-3">
  <a href="{!! route('testimonials.create') !!}" class="btn buttonBlue shadow link white">Deel je verhaal</a>
  <div class="card-columns mt-2">
  @foreach ($testimonials as $testimonial)
    <div class="card shadow mt-2">
      <div class="card-body">
        <div class="card-title"><h4>{{ $testimonial->title }}</h4></div>
        @php
          $body = strip_tags($testimonial->body);
        @endphp
        <div class="card-text">@truncate($body, 500)</div>
      </div>
      <div class="card-footer">
        <p><a href="{!! route('testimonials.show', ['id' => $testimonial->id]) !!}">Lees meer</a></p>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection
