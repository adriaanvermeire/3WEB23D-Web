@extends('layouts/master')

@section('title', 'admin')

@section('content')

<h1 class="text-center mt-5">Admin-panel</h1>

@foreach ($websection as $section)
   
<div class="container-fluid mt-5">
  
    <h3>Sectieomschrijving: {{ $section->name }}</h3>
    <div class="col-sm">
       <!-- <ul>
            <li>
            <p>gemaakt op: {{$section->created_at}}</p>
            <p>upgedate op: {{$section->updated_at}}</p> 
            </li>
        </ul>-->
    </div>

    <div class="col-sm">
       
    {!! Form::open(['action' => 'AdminController@delete_data']) !!}


    {{ Form::hidden('id', $section->id) }}   
    <div class="btn-group">
        <a href="/edit/{{$section->id}}" class='btn btn-warning'>
        Edit
        </a>
        <button class="btn btn-danger" type='submit'>Delete</button>
    </div>

    {!! Form::close() !!}

    </div>
    

</div>
@endforeach

<br>
<br>


<h1 class="text-center">Nieuwe sectie aanmaken</h1>
{!! Form::open(['action' => 'AdminController@save_data']) !!}


{!! Form::label('name', 'Websectie omschrijving', ['class' => 'col-md-4 control-label text-right', 'id' => 'name_label']) !!}
{!! Form::text('name', '', ['class' => 'col-md-4 control-label', 'id' => 'name_label']) !!}

{!! Form::submit('Toevoegen',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}



@endsection


