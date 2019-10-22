<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::published();

        return view('posts.index', compact('posts'));
    }

    public function show(Request $request, $id)
    {
        $post = Post::with('comments')->findOrFail($id);
        

        return view('posts.show', compact('post'));
    }


    public function create()

    {
    
        return view('posts.create');
    
    }

    public function store()
    {

        $this->validate(request(), ['title' => 'required', 'body' => 'required | min::15' ]);

        $post = Post::create(request()->all());

        return redirect()->route('posts.index');


    }
}



