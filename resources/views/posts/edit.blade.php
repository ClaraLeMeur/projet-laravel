@extends('layouts.app')

@section('content')
    <h1>Edition de l article</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titre')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Contenu')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Le contenue de l\'article ...'])}}
        </div>
        <div class="btn-group pull-right">
            
            {!! Form::hidden('_method', 'PUT') !!}
            
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
            </div>
    {!! Form::close() !!}
    
@endsection