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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consectetur amet quaerat ab, laboriosam eius blanditiis voluptatibus
        cumque minima, exercitationem
      </div>

    </div>
  </div>
  <div class="container ">

    <div class="row">
      <div class="col-md-4 float-left shadow p-0" style="height: 40vh; background-color:grey;">
        <img class='img-fluid' src="{!! asset('images/intimidatie1.jpg') !!}" alt="Intimidatie">
      </div>

      <div class="col-md-6 offset-md-2 float-right">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident unde, voluptates corporis vitae delectus suscipit non
        cumque eum, itaque cum neque corrupti ut molestiae aliquid optio doloremque sapiente in temporibus.
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <h2>Welke vormen zijn er?</h2>
    </div>

    <div class="row  p-sm-2">
      <div class="col-md-3">
        <div class="row">
          image
        </div>
        <div class="row">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ullam amet asperiores necessitatibus veniam debitis aut dolor
          cumque! Saepe tempora nisi suscipit doloremque necessitatibus vel ipsam delectus velit, quis reprehenderit.
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          image
        </div>
        <div class="row">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero debitis itaque cumque. Commodi eaque temporibus culpa aliquam
          repellendus ab dolores mollitia enim dolorum nesciunt. Tempore praesentium quaerat omnis perferendis facilis!
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          image
        </div>
        <div class="row">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem ut natus quis. Repudiandae hic totam harum mollitia repellat
          doloribus. Nostrum reiciendis, quisquam ex at delectus quidem corporis amet maxime nesciunt?
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          image
        </div>
        <div class="row">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate laudantium voluptas quam dignissimos, perspiciatis sunt,
          quis deserunt ut animi distinctio debitis quisquam nobis, dolorum tenetur praesentium sit expedita nesciunt cumque.
        </div>
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
      <div class="col-md-4 float-left shadow p-0" style="height: 40vh; background-color:grey;">
        <img class='img-fluid' src="{!! asset('images/intimidatie3.jpg') !!}" alt="Intimidatie">
      </div>
      <div class="col-md-6 offset-md-2 float-right">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident unde, voluptates corporis vitae delectus suscipit non
              cumque eum, itaque cum neque corrupti ut molestiae aliquid optio doloremque sapiente in temporibus.
      </div>
    </div>
  </div>

@endsection
