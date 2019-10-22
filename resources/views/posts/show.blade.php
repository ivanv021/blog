@extends('layouts.master')

@section('title', $post->title)

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at }}</p>
    <p>{{ $post->body }}</p>


    @if(count($post->comments))
    <h3>Comments: </h3>

    <ul class="list-unstyled">
        @foreach($post->comments as $comment)

        <li>

            <p>Author: {{ $comment->author }}</p>

            <p>

                {{ $comment->text  }}

            </p>

        </li>
        @endforeach

    </ul>

    @endif

    <h3>Create a comment </h3>
    <form method="POST" action="{{ route('posts-comment',  $post->id) }}">
        @csrf

        <div class="form-group">
            <label for="author">Your name is:</label>
            <input type="text" id="author" name="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="text">Comment: </label>
            <textarea name="text" id="text" class="form-control"></textarea>
        </div>
        <div class="form-control">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection
