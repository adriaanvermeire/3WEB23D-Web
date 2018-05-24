@extends('layouts/master')

@section('title', 'admin')

@section('content')

<div class="container">
  <h1 class="text-center red mt-5">Admin Panel</h1>
  <p>Hier kan de admin de content op de pagina aanpassen. Per sectie van de website zal je hier ook een onderdeel terugvinden. Daaronder staat dan diens content.</p>
  @if (isset($unseen) && count($unseen) > 0)
  <div class="card mx-auto shadow mt-2">
    <div class="card-body">
      <div class="card-title">
        <h3>Nieuwe verhalen!<br/><small>Er zijn verhalen die moeten nagekeken worden. De andere verhalen vind je <a href="#verhalen">hier</a>.</small></h3>
      </div>
      <div class="card-text">
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
      </div>
    </div>
  </div>
  @endif

  <div class="card shadow mt-2">
    <div class="card-body">
      <div class="card-title">
        <h2>Wat is het?</h2>
        <p>Hier zie je alle secties van de 'Wat is het?'-pagina. Elke sectie heeft een titel en content.</p>
      </div>
    </div>
  </div>

  <div class="card shadow mt-2">
    <div class="card-body">
      <div class="card-title">
        <span class=" d-flex justify-content-between align-items-center">
          <h2>Hoe reageren?</h2>
          <a class="btn btn-success ml-2 text-white" href='{!! route('admin.create-scenario') !!}'><i class="fas fa-plus"></i> Toevoegen</a>
        </span>
        <p>Hier vind je een overzicht van alle situaties die de gebruikers te zien krijgen op de 'Hoe reageren?'-pagina. Elk scenario heeft een titel (de omschrijving), een goede reactie en een slechte reactie.</p>
      </div>
      <div class="card-text">
        @if(count($scenarios) > 0)
        <table class="table">
          <th></th>
          <th>Titel</th>
          <th>Goede reactie</th>
          <th>Slechte reactie</th>
          <th></th>
          @foreach ($scenarios as $scenario)
          <tr>
            <td>
              <a href='{!! route('admin.edit-scenario', ['id' => $scenario->id]) !!}' class="btn btn-warning btn-sm">Bewerken</a>
            </td>
            <td>@truncate($scenario->name, 50)</td>
            <td>@truncate($scenario->good, 50)</td>
            <td>@truncate($scenario->bad, 50)</td>
            <td>
              {{ Form::open(['route' => ['admin.delete-scenario', $scenario->id], 'method' => 'delete']) }}
              <button type="submit" class='btn btn-danger'>Verwijderen</button>
              {{ Form::close() }}
            </td>
          </tr>
          @endforeach
        </table>
        @else
        <p>Er zijn nog geen scenario's toegevoegd! Voeg er een paar om op de site te tonen.</p>
        @endif
      </div>
    </div>
  </div>
  <div class="card shadow mt-2">
    <div class="card-body">
      <div class="card-title">
        <h2 id='verhalen'>Hun verhalen</h2>
        <p>Hier heb je een overzicht van alle verhalen. Indien er nieuwe verhalen zijn, dienen ze nagekeken te worden en vervolgens gepubliceerd of weerhouden worden.</p>
      </div>
      <div class="card-text">
      <table class='table'>
        <th></th>
        <th></th>
        <th>Titel</th>
        <th>Content</th>
        <th>Gepost op</th>
        <th></th>
      @if (isset($unseen))
        @foreach ($unseen as $testimonial)
          <tr>
            <td title='Dit verhaal moet nagekeken worden.'><i class="fas fa-exclamation-circle red"></i></td>
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
                <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Goed</a>
                <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Slecht</a>
              </div>
            </td>
          </tr>
        @endforeach
        @foreach ($seen as $testimonial)
          <tr>
            @if (!$testimonial->highlight && $testimonial->published)
            <td>
              <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}" class='no-highlight text-dark'><i class="far fa-star"></i></a>
            </td>
            @elseif ($testimonial->published)
            <td>
              <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}"><i class="fas fa-star yellow"></i></a>
            </td>
            @else
            <td></td>
            @endif
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
              @if ($testimonial->published)
                <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
              @else
                <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
              @endif
            </td>
          </tr>
        @endforeach
        </table>
      @endif
      </div>
    </div>
  </div>
</div>

{{-- <div class="container">
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
</div> --}}
@endsection
