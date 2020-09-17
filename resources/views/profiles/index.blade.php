@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="w-100 rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <h1 >{{ $user->username }}</h1>
                        <button class="btn btn-primary ml-4">Follow</button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/post/create">Add Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>22.3k</strong> followers</div>
                    <div class="pr-5"><strong>129</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div class="pt-1">{{ $user->profile->description }}</div>
                <a class="pt-1 cursor-pointer">{{ $user->profile->url }}</a>
            </div>
        </div>

        <div class="row">

            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}"><img class="w-100 pt-4" src="/storage/{{ $post->image }}"></a>
                </div>
            @endforeach


        </div>

    </div>
@endsection
