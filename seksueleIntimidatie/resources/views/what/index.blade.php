@extends('layouts/master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Wat is intimidatie nu eigenlijk?</h1>
</div>

<div class="container shadow p-0" style="height: 40vh; background-color:grey;">
    <img class='img-fluid' style="max-height: 40vh; width: 100vw " src="{!! asset('images/intimidatie2.jpg') !!}" alt="Intimidatie">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4  ">
      {!! $content[0]->body !!}
    </div>
  </div>
</div>
<div class="container ">
  <div class="row">
      <div class="col-md-4 float-left shadow p-0" style="height: 40vh; background-color:grey;">
          <img class='img-fluid' src="{!! asset('images/intimidatie1.jpg') !!}" alt="Intimidatie">
        </div>
    <div class="col-md-6 offset-md-2 float-right">
      {!! $content[1]->body !!}
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <h2>Welke vormen zijn er</h2>
  </div>
  <div class="card-deck">
    @php
      $range = range(2,4);
    @endphp
    @foreach ($range as $num)
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title red">
            <h3>{{ $content[$num]->title }}</h3>
          </div>
          <div class="card-text">{!! $content[$num]->body !!}</div>
        </div>
      </div>
    @endforeach
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="float-right">{{ $content[5]->title }}</h2>
      {!! $content[5]->body !!}
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="">{{ $content[6]->title }} </h2>
      {!! $content[6]->body !!}
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="float-right">{{ $content[7]->title }}</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 float-left shadow p-0" style="height: 40vh; background-color:grey;">
      <img class='img-fluid' src="{!! asset('images/intimidatie3.jpg') !!}" alt="Intimidatie">
    </div>
    <div class="col-md-6 offset-md-2 float-right">
      {!! $content[7]->body !!}
    </div>
  </div>
</div>

<div class="container">
 <h2> {{ $content[8]->title }} </h2>
  <div class="row d-flex justify-content-between">
    <div class="col-md-4 ml-0 "> 
      {!! $content[8]->body !!}
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="float-right">{{ $content[9]->title }} </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 text-center mb-5">
      <h4 class="text-center red">{{ $content[10]->title }}</h4>
      <p class="text-center pt-5 ">{!! $content[10]->body !!}  </p>
      <img src="{!! asset('images/statistiek12.png') !!}" class="img-fluid mb-3 " alt="">
    </div>
    <div class="col-md-4 text-center mb-5 ">
      <h4 class="text-center red ">{{ $content[11]->title }}</h4>
      <p class="text-center pt-5 mb-5 ">{!! $content[11]->body !!}  </p>
      <h5>3 op de 10 meisjes</h5>
      @for ($i = 0; $i < 10; $i++)
        @if ($i < 3)
          <i class="fas fa-female red"></i>
        @else
          <i class="fas fa-female"></i>
        @endif
      @endfor
        <br>
        <br>
        <h5>3 op de 100 jongens</h5>
      @for ($i = 0; $i < 5; $i++)
        @for ($y=0 ; $y < 20; $y++)
          @if ($i==0 && $y < 3 )
            <i class="fas fa-male red"></i>
          @else
            <i class="fas fa-male"></i>
          @endif
        @endfor
          <br>
      @endfor
    </div>
    <div class="col-md-4 mb-5 ">
      <h4 class="text-center red "> {{ $content[12]->title }}</h4>
      <p class="text-center pt-5">{!! $content[12]->body !!} </p>
      <img src="{!! asset('images/statistiek3-2.png') !!}" class="img-fluid pl-5 pr-5 mb-3 " alt="">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class=""> {{ $content[13]->title }} </h2>
      {!! $content[13]->body !!}
      <a href="{!! route('contact.index') !!}" class="btn buttonBlue shadow link white mt-5"> Klik voor meer info </a>
    </div>
  </div>


</div>


@endsection
