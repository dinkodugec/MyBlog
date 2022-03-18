<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        return view ('admin.posts.index');
    }

    public function show(Post $post)   //inject a class, Post class and $post object
    {
       return view('blog-post', ['post' => $post]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
     /*    dd(request()->all());  return empty collection*/

        $inputs = request()->validate([
            'title' => 'required|min:8|max:225',           //key will be from name attribute value
            'post_image' => 'file',  //mimes|jpeg,bmp,png
            'body'=> 'required'
        ]);
            if(request('post_image')){
                $inputs['post_image'] = request('post_image')->store('images');
            }

            auth()->user()->posts()->create($inputs);

            return back();

    }
}
