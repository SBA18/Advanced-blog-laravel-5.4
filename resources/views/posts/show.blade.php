@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="col-sm-8 blog-main">

  <div class="blog-post">
      <h2 class="blog-post-title">{{ $post->title }}</h2>
      <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>
      <p class="blog-post-meta">Tags :
          @if(count($post->tags))
            @foreach($post->tags as $tag)
                <span> <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}, </a> </span>
            @endforeach
          @endif
      </p>

      <p class="blog-post-meta">Categories :
          @if(count($post->categories))
            @foreach($post->categories as $category)
                <span> <a href="/posts/categories/{{ $category->id }}">{{ $category->title }}, </a> </span>
            @endforeach
          @endif
      </p>

      <p>{{ $post->body }}</p>
  </div><!-- /.blog-post -->

<div class="detailBox">
    <div class="titleBox">
        <label>Comment Box</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
    <div class="actionBox">

        <ul class="commentList">
            @foreach($post->comments as $comment)
            <li>
                <div class="commenterImage">
                    <img src="http://placekitten.com/45/45" />
                </div>
                <div class="commentText">
                    <p class="">{{ $comment->body }} | <a href="#">Edit</a>  | <a href="#">Delete</a> </p> <span class="date sub-text"> By: {{ $comment->user->name }} | {{ $comment->created_at->diffForHumans() }} | <a href="#">Replay</a></span>

                </div>
            </li>
            @endforeach
        </ul>
        @include('partials.errors')
        <form  method="POST" action="/posts/{{ $post->id }}/comments" class="form-inline" role="form">

            <div class="form-group">
                {{ csrf_field() }}

                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">

                <input class="form-control" type="text" placeholder="Your comments" name="body" id="body" required />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>

</div>



@endsection
