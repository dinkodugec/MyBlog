<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(Post $post)   //inject a class, Post class and $post object
    {
       return view('blog-post', ['post' => $post]);
    }
}
