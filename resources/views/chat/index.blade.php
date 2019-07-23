@extends('layouts.app')

@section('content')
    <div class="container">
        @include('chat.users',['users'=>$users])
    </div>
@endsection
