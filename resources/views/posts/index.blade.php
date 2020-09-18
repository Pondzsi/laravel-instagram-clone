@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="post-container">
                <div class="row">
                    <div class="col-6 offset-3">
                        <a href="/profile/{{ $post->user->id }}"><img class="w-70 post-image" src="/storage/{{ $post->image }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-6 offset-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="font-weight-bold">
                                    <a href="/profile/{{ $post->user->id }}">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>
                                </span> {{ $post->caption }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
