@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <div class="card-deck">
                @foreach ($articles as $article)
                    <div class="col-lg-4 my-2">
                        <div class="card cardHover">
                            <a href="/detail/{{ $article->id }}"><img src="{{ asset("assets/$article->image") }}"
                                    class="card-img-top p-4" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $article->title }}</strong></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        @else

            @if (Auth::user()->role == 'Member')
                <h5 class="mb-3">Welcome, {{ Auth::user()->name }}!</h5>

                <div class="card-deck">
                    @foreach ($articles as $article)
                        <div class="col-lg-4 my-2">
                            <div class="card cardHover">
                                <a href="/detail/{{ $article->id }}"><img src="{{ asset("assets/$article->image") }}"
                                        class="card-img-top p-4" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $article->title }}</strong></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if (Auth::user()->role == 'Admin')
                <div class="card-deck">
                    @foreach ($articles as $article)
                        <div class="col-lg-4 my-2">
                            <div class="card cardHover">
                                <a href="/detail/{{ $article->id }}"><img src="{{ asset("assets/$article->image") }}"
                                        class="card-img-top p-4" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $article->title }}</strong></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endguest

    </div>
@endsection
