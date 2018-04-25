@extends('layouts/master') @section('title', 'edit post') @section('content')
<h1>Edit post</h1>


<div class="container text-center">
    <div class="text-center">
        <h1>Wijzigen informatie</h1>
    </div>

    <div class="card card-default text-center">




        <h2>Sectienaam: {{$websection->name}}</h2>


        {!! Form::open(['action' => 'AdminController@edit_data']) !!}

        <!-- name -->
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}

        {{ Form::hidden('id', $websection->id) }}   

        <!-- email -->
            

        {{ Form::submit('Update websection!') }}

    {{ Form::close() }}
    </div>
</div>

@endsection