@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{$post->image}}" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 50px;">
                </div>
                <div>
                    <div class="font-weight-bold"><a class="no-link" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></div>
                </div>
                <a href="#" class="pl-2 font-weight-bold">Follow</a>
            </div>
            <hr>
            <p><span class="font-weight-bold"><a class="no-link" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection