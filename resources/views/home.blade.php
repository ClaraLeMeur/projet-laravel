@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Tableau de bord</h2>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary" style="margin-bottom: 20px"> Nouvelle Article</a>
                    <hr>
                    <h3>Vos articles</h3>
                    
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Titre</th>
                            <th>Editer</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Modifier</a></td>
                            <td>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <p>Vous n avez aucun article !</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
