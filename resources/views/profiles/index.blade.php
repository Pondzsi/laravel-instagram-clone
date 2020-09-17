@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fomr1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/15539019_229135140866025_2924413922989572096_a.jpg?_nc_ht=instagram.fomr1-1.fna.fbcdn.net&_nc_ohc=QYAGMtmy2dgAX_C6iWz&oh=a6118e335cc6819d30df4cdf94e91104&oe=5F8CB50F" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>53</strong> posts</div>
                <div class="pr-5"><strong>22.3k</strong> followers</div>
                <div class="pr-5"><strong>129</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-1">{{ $user->profile->description }}</div>
            <a class="pt-1 cursor-pointer">{{ $user->profile->url }}</a>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fomr1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c240.0.960.960a/s640x640/117954118_2899033433535008_1364641914494152000_n.jpg?_nc_ht=instagram.fomr1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=AH89GSNjeaIAX_2TdoG&oh=39862964a31e23407f6eb65ef637b6cf&oe=5F8B41A7" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fomr1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.118.947.947a/s640x640/18722840_1915635732032720_9165112489111715840_n.jpg?_nc_ht=instagram.fomr1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=x6kn5Y4B6VEAX_Oy6Vi&oh=d1fb9dbd3234423c094f8d83f3e9d151&oe=5F8E9B06" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="https://instagram.fomr1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/73414192_406140946960747_8630476396581582728_n.jpg?_nc_ht=instagram.fomr1-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=LEglXaIuJkgAX9Dgj7J&oh=66a99c40fa34d5f168d59168a5b6e2cb&oe=5F8AD7B7" alt="">
        </div>
    </div>

</div>
@endsection
