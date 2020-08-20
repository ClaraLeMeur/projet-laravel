@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    <hr>
    <a href="/posts/create" class="btn btn-primary" style="margin-bottom: 20px"> Nouvelle Article</a>
    @if (count($posts) >= 1)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>écrit le {{$post->created_at}}</small>
                <hr>
                <p><a href="/posts/{{$post->id}}"> Lire la suite ...</a></p>
            </div>
        @endforeach
    @else
        <p>Aucun article existant !</p>
    @endif
@endsection