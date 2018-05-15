@extends('layouts.master')

@section('title', $title)

@section('content')
  <div class="container mt-5">
      <h1 class="text-center red">Jouw verhaal</h1>
  </div>
  <div class="container mt-5">
    <a href="{{ url()->previous() }}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Keer terug</a>
  </div>
  <div class="container mt-5">

      <div class=" col align-self-center">
        <form action="{!! route('testimonials.post') !!}" method="post">
          @csrf
          <div class="form-group">
              <label for="email">E-mailadres:</label>
              <input name="email"  type="email" class="form-control shadow" id="email" aria-describedby="email" placeholder="Geef je e-mailadres op">
          </div>
          <div class="form-group">
            <label for="title">Titel: </label>
            <input name="title" type="text" class="form-control shadow" id="title" placeholder="Schrijf hier je titel">
          </div>
          <div class="form-group">
              <label for="body">Je verhaal</label>
              <textarea name="body" class="form-control shadow" rows="10" id="body"></textarea>
          </div>
          <button type="submit" class="btn buttonGreen shadow">Deel je verhaal</button>
        </form>
      </div>
  </div>
@endsection
