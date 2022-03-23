<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
       $posts = Post::all();
       return view ('admin.posts.index', ['posts'=>$posts]);

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

            session()->flash('post-created-message', 'Post with title was created' . $inputs['title'] );

            return redirect()->route('post.index');

    }

    public function edit(Post $post)
    {
    //    $this->authorize('view', $post);  //visibility only authorize user

    if(auth()->user()->can('view', $post)){
        
    }

       return view ('admin.posts.edit', ['post' => $post]);

    }

    public function destroy(Post $post, Request $request)
    {
       $post->delete();

       $request->session()->flash('message', 'Post was deleted');

       return back();
    }

    public function update(Post $post)
    {
        $inputs = request()->validate([
            'title' => 'required|min:8|max:225',           //key will be from name attribute value
            'post_image' => 'file',  //mimes|jpeg,bmp,png
            'body'=> 'required'
        ]);
        

            if(request('post_image')){
                $inputs['post_image'] = request('post_image')->store('images');
                $post->post_image = $inputs['post_image'];
            }

            $post->title = $inputs['title'];
            $post->body = $inputs['body'];

            $this->authorize('update', $post);

        $post->save(); 
      
        session()->flash('post-updated-message', 'Post with title was updated' . $inputs['title'] );

        return redirect()->route('post.index');
    }
}
