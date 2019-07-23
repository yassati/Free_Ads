@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @include('chat.users',['users'=>$users])
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body chat">
                    @foreach($messages as $msg)
                        <div class="row">
                            <div class="col-md-10 {{$msg->from->id !== $user->id ? 'offset-md-2 text-right' : ''}}">
                                <p>
                                    <strong>{{$msg->from->name}}</strong><br>
                                    {{$msg->content}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea name="content" placeholder="send message !" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
