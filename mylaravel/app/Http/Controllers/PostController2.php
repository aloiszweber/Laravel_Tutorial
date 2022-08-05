<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController2 extends Controller
{
    public function index() 

    {
        $posts = Post::all();


        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id) {

        $post = Post::findOrFail($id);
        // $post = Post::where('title', 'Provident dolor rerum in.')->first();

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()

    {
        return view('contact');
    }

    public function create()
    {
        return view('form');
    }
}
