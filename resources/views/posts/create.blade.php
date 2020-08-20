@extends('layouts.app')

@section('content')
    <h1>Création darticles</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titre')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Contenu')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Le contenue de l\'article ...'])}}
        </div>
        <div class="btn-group pull-right">
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
            </div>
    {!! Form::close() !!}
    
@endsection