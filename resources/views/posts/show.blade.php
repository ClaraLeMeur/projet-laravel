@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    
    <div class="well">
        <small>écrit le {{$post->created_at}}</small>
        <hr>
        {!!$post->body!!}
    </div>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Editer</a>    

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger', 'style' => 'margin-top: 10px']) !!}
            {!! Form::close() !!}
        @endif
    @endif
@endsection