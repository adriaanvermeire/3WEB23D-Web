@extends('layouts/master')

@section('title', 'Admin Login')

@section('content')
  <div class="card w-50 mx-auto mt-5 shadow">
    <div class="card-body">
      <div class="card-title">
        <h2>Admin Login</h2>
      </div>
      {!! Form::open(['route' => 'authenticate', 'method' => 'POST']) !!}
      <div class="form-group">
        <label for="email">E-mail</label>
        <input id='email' type="text" name="email" value="" class='form-control form-control-lg' placeholder='Admin E-mailadres'>
      </div>
      <div class="form-group">
        <label for="password">Wachtwoord</label>
        <input id='password' type="password" name="password" value="" class='form-control form-control-lg' placeholder='Admin Wachtwoord'>
      </div>
      <button class="btn btn-success">Login</button>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
