@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Post') }}</div>
                    <div class="card-body">
                        <form method="POST" action="/profil/{{$post->id}}/update" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">

                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Title : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" value="{{$post->title}}" class="form-control">
                                </div>

                                <label for="content" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Content : ') }}
                                </label>
                                <div class="col-md-8">
                                    <textarea id="content" name="content" type="text"  class="form-control">{{$post->content}}</textarea>
                                </div>

                                <label for="price" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Price : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="price" name="price" type="text"  class="form-control" value="{{$post->price}}">
                                </div>
                                <label for="url" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('file : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="url" name="url" type="file" class="form-control" value="{{$post->img1}}">
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
