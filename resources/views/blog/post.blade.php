@extends('blog.layouts.main')

@section('image', 'img/post-bg.jpg')
@section('title', $post->title)
@section('text', $post->subtitle)

@section('mainContent')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>{{$post->text}}</p>
        </div>
      </div>
    </div>
  </article>
    <div class="container">
        <div class="row">
            <div class="detailBox col-md-12">
                <div class="actionBox">
                    <ul class="commentList">
                        @each('blog.comment', $post->comments, 'comment')
                    </ul>
                    <form method="post" class="form-inline" role="form" action="{{route('commentToPost', ['post' => $post->id])}}">
                        @csrf
                        <div class="form-group">
                            <input name="text" class="form-control" type="text" placeholder="Your comments" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()