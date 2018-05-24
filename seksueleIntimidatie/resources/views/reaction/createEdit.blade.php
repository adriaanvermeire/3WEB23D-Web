@extends('layouts.master')
@section('title', 'Admin | Scenario toevoegen')
@section('content')
  <div class="container mt-5">
    @if (Request::is('admin/scenarios/toevoegen'))
      <h1 class="text-center red">Admin | Scenario toevoegen</h1>
    @else
      <h1 class="text-center red">Admin | Scenario bewerken</h1>
    @endif
  </div>
  <div class="container mt-5 mb-3">
    <a href="{!! route('admin.index') !!}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Admin Panel</a>
  </div>
  <div class="container mt-2">
      <div>
        <form action="{!! route('admin.post-scenario') !!}" method="post">
          @csrf
          <div class="form-group">
              <label for="description">Omschrijving:</label>
              <input name="description"  type="text" class="form-control shadow"
              id="title" aria-describedby="title" placeholder="Omschrijving van het scenario"
              value="{{ $scenario->name or '' }}">
          </div>
          <div class="form-group">
            <label for="good">Goede reactie: </label>
            <textarea id="good" name="good" class="form-control shadow" rows="10">{{ $scenario->good or '' }}</textarea>
          </div>
          <div class="form-group">
            <label for="bad">Slechte reactie: </label>
            <textarea id="bad" name="bad" class="form-control shadow" rows="10">{{ $scenario->bad or '' }}</textarea>
          </div>
          <input type="hidden" name="id" value="{{ $scenario->id or '' }}">
          <button type="submit" class="btn buttonGreen shadow">Sla scenario op</button>
        </form>
      </div>
  </div>
@endsection
