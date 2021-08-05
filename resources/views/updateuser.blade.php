@extends('layouts.app')

@section('content')
    <div class="container shadow p-4 rounded my-3">
        @if (Auth::user()->role == 'Member')
            <form action="/update/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="mb-4"><strong>Update User</strong></h1>

                        <div class="form-group row">
                            <label for="user name" style="font-size: 1.3rem"
                                class="col-md-4 col-form-label">{{ __('Name:') }}</label>

                            <div class="col-md-8">
                                <input id="userName" type="text"
                                    class="form-control @error('userName') is-invalid @enderror" name="userName" required
                                    autocomplete="userName" autofocus>
                                @error('userName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user email" style="font-size: 1.3rem"
                                class="col-md-4 col-form-label">{{ __('E-mail Address:') }}</label>

                            <div class="col-md-8">
                                <input id="userEmail" type="text"
                                    class="form-control @error('userEmail') is-invalid @enderror" name="userEmail" required
                                    autocomplete="userEmail" autofocus>
                                @error('userEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user phone" style="font-size: 1.3rem"
                                class="col-md-4 col-form-label">{{ __('Phone Number:') }}</label>

                            <div class="col-md-8">
                                <input id="userPhone" type="text"
                                    class="form-control @error('userPhone') is-invalid @enderror" name="userPhone" required
                                    autocomplete="userPhone" autofocus>
                                @error('userPhone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update User') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection
