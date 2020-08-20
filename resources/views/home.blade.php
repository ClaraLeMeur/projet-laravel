@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Dashboard</h2>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
