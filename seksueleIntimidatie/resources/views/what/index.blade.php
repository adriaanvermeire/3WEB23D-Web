@extends('layouts/master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Wat is intimidatie nu eigenlijk?</h1>
</div>

<div class="container shadow " style="height: 40vh; background-color:grey;">
  fotoke
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
    <div class="col-md-4 float-left shadow " style="height: 40vh; background-color:grey;">
      fotoke
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

  <div class="row d-flex justify-content-between">
    <div class="col-md-3 ">
      <div class="row">
        <h3 class="red"> Verbaal </h3>
      </div>
      <div class="row shadow bg-white ">


        <ul class="list-group ">
          
          {!! $content[2]->body !!}
        </ul>

      </div>
    </div>
    <div class="col-md-3   ">
      <div class="row">
        <h3 class="red"> Non-verbaal </h3>
      </div>
      <div class="row shadow bg-white">
        <ul class="list-group ">
          {!! $content[3]->body !!}


        </ul>
      </div>
    </div>

    <div class="col-md-3  ">
      <div class="row">
        <h2 class="red">Fysiek</h2>

      </div>
      <div class="row shadow bg-white">
        <ul class="list-group  ">
      
          {!! $content[4]->body !!}
        </ul>
      </div>
    </div>


  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="float-right">Enkele voorbeelden van seksuele intimidatie</h2>
    </div>
  </div>

  {!! $content[5]->body !!}
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="">Verschil tussen aanranding en verkrachting </h2>
      
      {!! $content[6]->body !!}
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="container">
      <h2 class="float-right">Waar is de grens?</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 float-left shadow  " style="height: 40vh; background-color:grey;">
      fotoke
    </div>
    <div class="col-md-6 offset-md-2 float-right">
      {!! $content[7]->body !!}
    </div>
  </div>
</div>

<div class="container">

 <h2> {{ $content[8]->title }} </h2>
  <div class="row  d-flex justify-content-between">
    <div class="col-md-4 ml-0 "> {!! $content[8]->body !!} 
    </div>

    <div class="col-md-4   shadow " style="height: 40vh; background-color:grey;">
      fotoke
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
      @for ($i = 0; $i
      < 10; $i++) @if ($i < 3) <i class="fas fa-female red">
        </i>
        @else
        <i class="fas fa-female"></i>
        @endif @endfor
        <br>
        <br>
        <h5>3 op de 100 jongens</h5>
        @for ($i = 0; $i
        < 5; $i++) @for ($y=0 ; $y < 20; $y++) @if ($i==0 && $y < 3 ) <i class="fas fa-male red">
          </i>
          @else
          <i class="fas fa-male"></i>
          @endif @endfor
          <br> @endfor
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

      <a href="/waar-kan-je-terecht" class="btn buttonBlue shadow link white mt-5"> Klik voor meer info </a>
    </div>
  </div>


</div>


@endsection
