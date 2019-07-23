@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($user as $info)
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;" >
                <h1 style="color: #0000F0">Profile :</h1>
                <h3>{{ 'Name : '.$info->name }}</h3>
                <h3>{{ 'Email : '.$info->email }}</h3>
                <h3>{{ 'Password : **********'}}</h3>
                <a href="/profil/{{ $info->id }}/editp"><button type="submit" class="btn btn-success" style="margin-right: 1%;">Edit</button> </a>
                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
            <h1 style="color: #0000F0">Posts :</h1>
            @foreach($posts as $post)
                <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                    <h1>{{ $post->title }}</h1>
                    <span>{{ $post->created }}</span>
                    <p>{{ $post->content }}</p>
                    <h4>{{ $post->price .' $' }}</h4>
                    <img src="uploads/{{$post->img1}}" style="width: 200px; height: 120px">

                    <p style="text-align: right;"><a href="/profil/{{ $post->id }}/edit"><button type="submit" class="btn btn-success" style="margin-right: 1%;">Edit</button> </a><a href="/profil/{{ $post->id }}/delete"><button type="submit" class="btn btn-danger col-md-1">Delete</button></a></p>
                </div>
            @endforeach
            {{ $posts->links() }}
    </div>
@endsection
