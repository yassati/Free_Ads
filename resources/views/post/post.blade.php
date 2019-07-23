@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>
                    <div class="card-body">
                        <h1>{{ $post->title }}</h1>
                        <div class="row -flex justify-content-center mt-3">
                            @foreach($ad as $image)
                                <div class="col-3">

                                    <img class="card-img-top" src="{{ asset("uploads/" . $image->img) }}" alt="" max-height='300px'>
                                </div>
                            @endforeach
                        </div>
                        <p>{{ $post->content }}</p>
                        <h4>{{ $post->price .' $' }}</h4>
                        <i>{{ 'published by : '. $post->user->name }}</i>
                        <span>{{ $post->created_at }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
        {{--@foreach($ad as $image)--}}

        {{--<div class="carousel-inner {{$loop->first?'active':''}}">--}}
            {{--<div class="carousel-item">--}}
                    {{--<img class="d-block w-100" src="{{ asset("uploads/" . $image->img) }}" alt="">--}}
                {{--</div>--}}

        {{--</div>--}}
        {{--@endforeach--}}

        {{--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}

    {{--</div>--}}



@endsection
{{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--    @foreach($ad as $image)--}}

{{--        <div class="carousel-inner {{$loop->first?'active':''}}">--}}
{{--            <div class="carousel-item">--}}
{{--                <img class="d-block w-100" src="{{ asset("uploads/" . $image->img) }}" alt="">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    @endforeach--}}

{{--    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}

{{--</div>--}}