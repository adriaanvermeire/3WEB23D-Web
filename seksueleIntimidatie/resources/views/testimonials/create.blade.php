@extends('layouts.master')

@section('title', $title)

@section('content')
  <h1>Mijn verhaal</h1>
  <form class="form" action="/mijn-verhaal" method="post">
    @csrf
    <label for="email">E-mailadres:</label>
    <input class='form-control' type="email" name="email" value="">
    <label for="title">Titel: </label>
    <input  class='form-control' id='titel' type="text" name="title" value="">
    <label for="body">Mijn verhaal: </label>
    <textarea id='body'  class='form-control'  name="body" rows="8" cols="80"></textarea>
    <input  class='form-control'  class="btn btn-success" type='submit' value='Verzenden'>
  </form>
@endsection
