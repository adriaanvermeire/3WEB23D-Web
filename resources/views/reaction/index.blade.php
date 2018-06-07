@extends('layouts.master')

@section('title', $title)

@section('content')
  @if (count($scenarios) > 0)
  <div class="container mt-5">
    <h1 class="text-center red">Hoe moet je reageren bij volgende situaties</h1>
  </div>
  <div class="container">
    <h4>Hieronder vind je enkele situaties waarbij je een goede en slechte reactie ziet.</h4>
  </div>

  <div class="container wat">
    @foreach ($scenarios as $scenario)
      <div class="card shadow">
        <a data-toggle="collapse" href="#scenario-{{$scenario->id}}" aria-expanded="true" aria-controls="scenario-{{$scenario->id}}" class='situation-toggle collapsed'>
          <div class="card-header d-flex justify-content-between align-items-center text-dark situation-header p-3">
            <h5 class='m-0'>
              <strong>
                {{ $scenario->name }}
              </strong>
            </h5>
            <i class="fa fa-angle-down arrow"></i>
          </div>
        </a>
        <div id="scenario-{{$scenario->id}}" class="collapse">
          <div class="card-block p-3">
            <div class="row p-2">
              <div class="col-2 offset-sm-1">
                <i class="fas fa-plus-circle"></i>
              </div>
              <div class="col-6 good">
                {{ $scenario->good }}
              </div>
              </div>
              <div class="row p-2">
                <div class="col-2 offset-sm-1">
                  <i class="fas fa-minus-circle"></i>
                </div>
                <div class="col-6 bad">
                  {{ $scenario->bad }}
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach
  </div>
  @endif
  <div class="container wat p-5">
    <h1 class="text-center red">Speel ons spel en test je kennis!</h1>

    <div class="container bggrey p-5 pointer">
      <div class="text-center p-5">
        <i class="fas fa-gamepad"></i>
      </div>
      <div class="webgl-content"  >
        <div id="gameContainer"  ></div>
        <div class="footer">
          <div class="webgl-logo"></div>
          <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
          <div class="title">3WEB23D</div>
        </div>
      </div>
    </div>

    
  </div>

  @push('scripts')
  <script>
   
/* 
    $( ".webgl-content" ).click(function() {
      gameInstance.SetFullscreen(1);
      alert('geklikt');
});*/
  </script>
  @endpush
@endsection
