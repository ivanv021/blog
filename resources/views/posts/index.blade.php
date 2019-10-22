@extends('layouts.master')

@section('title', 'All posts')

@section('content')

<a href="{{ route('create-post') }}" class="btn btn-primary">Create new post</a>

<ul>
    @foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}">
            {{ $post->title }}
        </a>
    </li>
    @endforeach
</ul>
@endsection
