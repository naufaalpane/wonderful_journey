@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->role == 'Admin')
        <div class="card-deck">
            @foreach ($users as $user)
                <div class="col-lg-4 my-4">
                    <div class="card cardHover">
                        <div class="bg-info card-header text-white">
                            <h5 class="card-title"><strong>User ID: {{ $user->id }}</strong></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Usernmame: {{ $user->name }}</p>
                            <p class="card-text">Email: {{ $user->email }}</p>
                            <p class="card-text">Phone Number: {{ $user->phone }}</p>
                            <a href="/deleteuser/{{ $user->id }}" class="btn btn-danger">Delete User</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif 
    </div>
@endsection