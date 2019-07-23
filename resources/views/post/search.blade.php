@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Search') }}</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Title : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" class="form-control">
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($posts))
        @foreach($posts as $post)
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                <h1><a href="{{ URL::action('Post\PostController@view', $post->id) }}">{{ $post->title }}</a></h1>
                <p>{{ $post->content }}</p>
                <h4>{{ $post->price .' $' }}</h4>
                <i>{{ 'published by : '. $post->user->name }}</i>
                <span>{{ $post->created_at }}</span>
            </div>
        @endforeach
            @endif

    </div>
@endsection
