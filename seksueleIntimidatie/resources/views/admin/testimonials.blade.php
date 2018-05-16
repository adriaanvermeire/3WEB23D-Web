@extends('layouts/master')

@section('title', 'Admin | Hun verhalen')

@section('content')

<div class="container">
  <h1 class="text-center red mt-5">Admin | Hun verhalen</h1>
  <div class="card mx-auto shadow">
    <div class="card-body">
      <div class="card-title">
        <h3>
          Hun verhalen<br/>
          <small>Hieronder een overzicht van alle verhalen.</small>
        </h3>
      </div>
      <div class="card-text">
      @if (isset($unseen))
        <table class='table'>
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
@endsection
