<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        //  dd(Post::all());

        // $post = Post::get();
        // return $post;

        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function edit(Post $id)
    {
        return view('posts.edit', ['post' => $id]);
    }

    public function update(Post $post)
    {

        // dd(request()->all());

        request()->validate([

            'title' => 'required',
            'content' => 'required',
       ]);



        $post->update([

            'title'  => request('title'),
            'content'  => request('content'),

        ]);

        return redirect('/posts');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([

            'title' => 'required',
            'content' => 'required',
       ]);

       Post::create([

        'title'  => request('title'),
        'content'  => request('content'),

       ]);

       return redirect('/posts');

    }
}
