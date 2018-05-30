@extends('layouts/master')

@section('title', 'Admin | Content bewerken')

@push('styles')
<!-- include summernote css/js-->
<link href="{!! asset('css/summernote.css') !!}" rel="stylesheet">
@endpush

@section('content')
  <div class="container mt-5">
  <h1 class="text-center red">Admin | Content bewerken</h1>
  </div>
  <div class="container mt-5 mb-3">
    <a href="{!! route('admin.index') !!}" class="btn buttonBlue shadow link white"><i class="fas fa-arrow-left"></i> Admin Panel</a>
  </div>
  <div class="container mt-2">
        <p><strong>Dit contentblok is van de '{{ $content->webpage }}'-pagina.</strong></p>
        <form action="{!! route('admin.post-content') !!}" method="post">
          @csrf
          <div class="form-group">
              <label for="title">Titel:</label>
              <input name="title"  type="text" class="form-control shadow"
              id="title" aria-describedby="title" placeholder="Omschrijving van het scenario"
              value="{{ $content->title }}">
          </div>
          <div class="form-group">
            <label for="summernote">Inhoud: </label>
            <textarea id="summernote" name="body" class="form-control shadow" rows="10">{{ $content->body }}</textarea>
          </div>
          <input type="hidden" name="id" value="{{ $content->id }}">
          <button type="submit" class="btn buttonGreen shadow">Sla content op</button>
        </form>
  </div>
@endsection

@push('scripts')
<script src="{!! asset('js/summernote.js') !!}"></script>
<script src="{!! asset('js/summernote-nl-NL.js') !!}"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({ lang: 'nl-NL' });
});
</script>
@endpush
