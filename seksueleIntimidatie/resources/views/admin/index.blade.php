@extends('layouts/master')

@section('title', 'admin')

@section('content')

<div class="container">
  <h1 class="text-center red mt-5">Admin Panel</h1>
  <div class="card mx-auto shadow">
    <div class="card-body">
      <div class="card-title">
      @if (isset($unseen) && count($unseen) > 0)
        <h3>Nieuwe verhalen!<br/><small>Er zijn verhalen die moeten nagekeken worden.</small></h3>
      @else
        <h3><small>Geen nieuwe verhalen. Je bent bijgewerkt!</small></h3>
      @endif
      </div>
      <div class="card-text">
        De andere verhalen vind je <a href="{!! route('admin.testimonials') !!}">hier</a>.
      @if (isset($unseen))
        <table class='table'>
        @foreach ($unseen as $testimonial)
          <tr>
            <td>
              <a href='{!! route('admin.review', ['id' => $testimonial->id]) !!}' class="btn btn-warning btn-sm">Bekijken</a>
            </td>
            <td>@truncate($testimonial->title, 50)</td>
            @php
              $body = strip_tags($testimonial->body);
            @endphp
            <td>@truncate($body, 50)</td>
            <td><date>{{ $testimonial->created_at }}</date></td>
            <td class='d-flex justify-content-end'>
              <div class="btn-group">
                <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
                <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
              </div>
            </td>
          </tr>
        @endforeach
        </table>
      @endif
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card mx-auto mt-5 shadow">
    <div class="card-body">
      <div class="card-title">
        <h2>Voeg een nieuwe sectie toe aan de <i>Wat is het?</i>-pagina</h1>
      </div>
      {!! Form::open(['class' => 'form-horizontal', 'method' => 'POST', 'route' => 'admin.create-section']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Titel', ['id' => 'title']) !!}
        {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Titel van de sectie']) !!}
      </div>
      <div class="form-group">
        <label for="body">Inhoud</label>
        <textarea class="form-control" id="body" rows="5" name='body'></textarea>
      </div>
      <div class="form-group">
        {!! Form::submit('Toevoegen',['class' => 'btn btn-success']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
