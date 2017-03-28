@extends('layouts.app')
@section('title', 'My posts')
@section('content')
    <div class="col-sm-8 blog-main">
        <div class="panel panel-default">
            <div class="panel-heading">My posts</div>
			
            <div class="panel-body">
               <table class="table">
				  <thead class="thead-inverse">
				    <tr>
				      <th>#</th>
				      <th>Title</th>
				      <th>Body</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  @foreach($posts as $post)
				    <tr>
				      <th scope="row">{{ $category->id }}</th>
				      <td>{{ $post->title }}</td>
				      <td>{{ $post->body }}</td>
				      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
				    </tr>
				   
				   @endforeach
				  </tbody>
				</table>
            </div>
        </div>
    </div>
@endsection
