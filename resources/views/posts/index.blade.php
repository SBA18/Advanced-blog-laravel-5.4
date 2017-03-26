@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
  <div class="col-sm-8 blog-main">

    @foreach($posts as $post)

    <div class="blog-post">
      <h2 class="blog-post-title"><a href="/posts/{{  $post->id }}">{{ $post->title }}</a></h2>
      <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{ $post->user->name }}</a></p>
      <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->
    <hr>
    @endforeach

    <nav class="blog-pagination text-center">
      {!! $posts->links() !!}
    </nav>

  </div><!-- /.blog-main -->
@endsection
