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
          @if (!$errors->first('email'))
          <label for="email">E-mailadres:
          @else
          <label for="email" class='red'>
            <strong>E-mailadres 
            <span class='red'>
            {{ $errors->first('email') }}
            </span>  
          </strong>
          @endif  
          </label>
          <input id='email' type="text" name="email" value="{{ old('email') }}" class='form-control form-control-lg' placeholder='Admin E-mailadres' required>
      </div>
      <div class="form-group">
          @if (!$errors->first('password'))
          <label for="password">Wachtwoord:
          @else
          <label for="password" class='red'>
            <strong>Wachtwoord 
            <span class='red'>
            {{ $errors->first('password') }}
            </span>  
          </strong>
          @endif  
          </label>
          <input id='password' type="password" name="password" value="{{ old('password') }}" class='form-control form-control-lg' placeholder='Admin Wachtwoord' required>
      </div>
      <button class="btn btn-success">Inloggen</button>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
