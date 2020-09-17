<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required', 'image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        $post = new \App\Post();

        $post->user_id = auth()->id();
        $post->caption = $data['caption'];
        $post->image = $imagePath;

        $post->save();

        return redirect('/profile/'.auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }

}
