@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($posts as $post)
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                <h1><a href="{{ URL::action('Post\PostController@view', $post->id) }}">{{ $post->title }}</a></h1>
                <p>{{ $post->content }}</p>
                <h4>{{ $post->price .' $' }}</h4>
                <i>{{ 'published by : '. $post->user->name }}</i>
                <span>{{ $post->created_at }}</span>
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
@endsection
