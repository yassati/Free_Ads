@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('new Post') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('newad')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">

                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Title : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" class="form-control" required>
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="content" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('post : ') }}
                                </label>
                                <div class="col-md-8">
                                    <textarea id="content" name="content" type="text" class="form-control" required></textarea>
                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <label for="price" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Price : ') }}
                                </label>

                                <div class="col-md-8">
                                    <input id="price" name="price" type="text" class="form-control" required>
                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="filename" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('file : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="filename" name="filename[]" type="file" class="form-control" multiple required>
                                    @if ($errors->has('filename'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('filename') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('New Post') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                            @if(Session::has('success'))
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                        <div id="message" class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
