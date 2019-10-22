@extends('layouts.master')

@section('title')

    Create new post

@endsection


@section('content')


        <h2 class="blog-post-title">Create new post</h2>


        <form method="POST" action= {{ route('store-post')  }}>


            @csrf


            <div class = "form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control" id="title" name="title"/>
                @include('posts.partials.error-message', ['fieldTitle' => 'title'])

            </div>

            <div class = "form-group">
                    <label for="Body">Body</label>
                    <textarea type="text" class="form-control" id="body" name="body"> </textarea>
                    @include('posts.partials.error-message', ['fieldTitle' => 'body'])
    
           </div>

           <div class = "form-group">

            <label for="published">Publish?</label>
            <input type="checkbox" class="form-control" id="is_published" name="is_published" value="1" />
            
           
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary" >
                    Submit

                </button>
                </div>
             </form>


@endsection