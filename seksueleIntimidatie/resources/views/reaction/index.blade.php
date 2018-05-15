@extends('layouts.master')

@section('title', $title)

@section('content')
  <div class="container mt-5">
    <h1 class="text-center red">Hoe moet je reageren bij volgende situaties</h1>
  </div>
  <div class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus, assumenda doloremque magnam velit amet
      inventore porro dolores voluptate? Doloribus necessitatibus, omnis cupiditate asperiores sequi atque libero quaerat
      itaque praesentium.</p>
  </div>

  <div class="container wat">
    <div class="row">
      <button data-toggle="collapse" data-target="#demo" class="btn-block buttonNormal shadow text-left ">Iemand roept vulgaire woorden naar een meisje/jongen op de bus
        <i class="fa fa-angle-down pull float-right"></i>
      </button>

      <div id="demo" class="collapse">

          <div class="card shadow">
              <div class="card-body">
                This is some text within a card body.
              </div>
            </div>
      </div>
    </div>
    <div class="row">
      <button data-toggle="collapse" data-target="#demo2" class="btn-block buttonNormal shadow text-left ">Iemand roept vulgaire woorden naar een meisje/jongen op de bus
        <i class="fa fa-angle-down pull float-right"></i>
      </button>

      <div id="demo2" class="collapse">
        Lorem ipsum dolor text....
      </div>
    </div>

  </div>

@endsection
