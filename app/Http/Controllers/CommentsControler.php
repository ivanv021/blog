<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store($postId) 
    {
        $post = Post::find($postId);

        $this->validate(request(), ['author' => 'required | string', 'text' => 'required']);

        $post->comments()->create(request()->all());


        return redirect()->route('posts.show', ['id' => $postId]);

    }
}