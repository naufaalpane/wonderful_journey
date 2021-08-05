@extends('layouts.app')

@section('content')
    <div class="container shadow p-4 rounded my-3">
        <form action="/createarticle" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-8">
                <h1 class="mb-4"><strong>Create New Article</strong></h1>

                <div class="form-group row">
                    <label for="pizza name" style="font-size: 1.3rem"
                        class="col-md-4 col-form-label">{{ __('Article Name:') }}</label>

                    <div class="col-md-8">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            required autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pizza price" style="font-size: 1.3rem"
                        class="col-md-4 col-form-label">{{ __('Article Category:') }}</label>

                        <div class="col-md-8">
                            <select name="categoryId" id="" class="form-control">
                                <option value="1">Beach</option>
                                <option value="2">Mountain</option>
                                <option value="3">Temple</option>
                            </select>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="article description" style="font-size: 1.3rem"
                        class="col-md-4 col-form-label">{{ __('Article Description:') }}</label>

                    <div class="col-md-8">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" required autocomplete="description" autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="article image" style="font-size: 1.3rem"
                        class="col-md-4 col-form-label">{{ __('Article Image:') }}</label>

                    <div class="col-md-8">
                        <input id="articleImage" type="file"
                            class="form-control-file @error('articleImage') is-invalid @enderror" name="articleImage"
                            required autocomplete="articleImage" autofocus>
                        @error('articleImage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Article') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
