@extends('layouts.master')

@section('title', $title)

@section('content')
  <div class="container mt-5">
    <h1 class="text-center red">Hoe moet je reageren bij volgende situaties</h1>
  </div>
  <div class="container">
    <h4>Hieronder vind je enkele situaties waarbij je een goede en slechte reactie ziet.</h4>
  </div>

  <div class="container wat">
    <div class="card shadow">
        <a data-toggle="collapse" href="#test-block" aria-expanded="true" aria-controls="test-block">
          <div class="card-header d-flex justify-content-between">
            <h5 class='text-dark'>
              <strong>
                Ik was echt bang voor een jongen uit het rugbyteam. Hij moest en zou me ’hebben’. Hij viel me een jaar lang zowat elke dag
                lastig.
              </strong>
            </h5>
            <i class="fa fa-angle-down pull float-right"></i>
          </div>
        </a>
        <div id="test-block" class="collapse">
            <div class="card-block">
              <div class="row p-2">
                <div class="col-2 offset-sm-1">
                  <i class="fas fa-plus-circle"></i>
                </div>
                <div class="col-6">
                  Weersta de verleiding om er maar een beetje om te lachen. Laat duidelijk merken, ook door je gezichtsuitdrukking,
                  wat je wel en niet zult tolereren.</div>
              </div>
              <div class="row p-2">
                <div class="col-2 offset-sm-1">
                  <i class="fas fa-minus-circle"></i>
                </div>
                <div class="col-6">De kans is klein dat iemand zijn gedrag verandert als iedereen het acceptabel vindt.</div>
              </div>
            </div>
        </div>
    </div>
  </div>

  <div class="container wat p-5">
    <h1 class="text-center red">Speel ons spel en test je kennis!</h1>

    <div class="container bggrey p-5 pointer">
      <div class="text-center p-5">
        <i class="fas fa-gamepad"></i>
      </div>

    </div>
  </div>
@endsection
