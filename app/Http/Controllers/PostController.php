<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('index', compact('posts'));
    }

    public function post($slug)
    {
         $posts = Post::where('slug', $slug)->get();

        //render view with posts
        return view('post', compact('posts'));
    }
}
