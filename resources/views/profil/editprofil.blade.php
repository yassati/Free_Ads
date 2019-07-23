@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profil') }}</div>
                    <div class="card-body">
                        <form method="POST" action="/profil/{{$user->id}}/updatep">
                            {{csrf_field()}}
                            <div class="form-group row">

                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Name : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="name" name="name" type="text" value="{{$user->name}}" class="form-control">
                                </div>

                                <label for="email" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Email : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="email" value="{{$user->email}}" class="form-control">
                                </div>

                                <label for="password" class="col-sm-4 col-form-label text-md-right">
                                    {{ __('Password : ') }}
                                </label>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="password" value="{{$user->password}}" class="form-control">
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
