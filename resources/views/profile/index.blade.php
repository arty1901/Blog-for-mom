@extends('main')

@section('title', "| $user->name")

@section('content')
    <div class="container profile_page">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/images/avatars/{{ $user->avatar }}">
                <div class="container">
                    <h2>{{ $user->name }}'s Profile, {{ $user->age }}</h2>
                    <div class="dropdown-divider"></div>
                    <p>{{ $user->description }}</p>
                </div>
            </div>
        </div>
    </div>
@stop