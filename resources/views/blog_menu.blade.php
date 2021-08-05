@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->role == 'Member')
        <div class="card-deck">
            @foreach ($articles as $article)
                <div class="col-lg-4 my-4">
                    <div class="card cardHover">
                        <div class="bg-info card-header text-white">
                            <h5 class="card-title"><strong>Article ID: {{ $article->id }}</strong></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Title: {{ $article->title }}</p>
                            <a href="/deletearticle/{{ $article->id }}" class="btn btn-danger">Delete Article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif 
    </div>
@endsection