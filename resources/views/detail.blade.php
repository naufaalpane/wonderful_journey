@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ asset("assets/$articles->image") }}" class="img img-fluid w-100 p-5">
        <h3><strong>{{ $articles->title }}</strong></h3>
        <h5>{{ $articles->description }}</h5>
    </div>
@endsection