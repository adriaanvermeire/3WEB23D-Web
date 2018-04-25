@extends('layouts/master')

@section('title', 'admin')

@section('content')



@foreach ($websection as $section)
   
<div class="container-fluid">
    <h3>Sectieomschrijving: {{ $section->name }}</h3>
    <div class="col-sm">
        <ul>
            <li>
            <p>gemaakt op: {{$section->created_at}}</p>
            <p>upgedate op: {{$section->updated_at}}</p>
            </li>
        </ul>
    </div>

    <div class="col-sm">
        <a href="/edit/{{$section->id}}">
        <button class="btn btn-warning">Edit</button>
    </a>
    {!! Form::open(['action' => 'AdminController@delete_data']) !!}


    {{ Form::hidden('id', $section->id) }}   
    {!! Form::submit('Delete this post!') !!}
    {!! Form::close() !!}

    </div>
    

</div>
@endforeach
<button type="submit" class="btn btn-primary">yowtow</button>

<h1>Nieuwe sectie aanmaken</h1>
{!! Form::open(['action' => 'AdminController@save_data']) !!}


{!! Form::label('name', 'Websectie omschrijving', ['class' => 'col-md-4 control-label', 'id' => 'name_label']) !!}
{!! Form::text('name', '', ['class' => 'col-md-4 control-label', 'id' => 'name_label']) !!}

{!! Form::submit('Click Me!') !!}
{!! Form::close() !!}



@endsection


