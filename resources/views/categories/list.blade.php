@extends('layouts.app')
@section('title', 'List of categories')
@section('content')
    <div class="col-sm-8 blog-main">
        <div class="panel panel-default">
            <div class="panel-heading">List of categories</div>
			
            <div class="panel-body">
               <table class="table">
				  <thead class="thead-inverse">
				    <tr>
				      <th>#</th>
				      <th>Title</th>
				      <th>Description</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  @foreach($categories as $category)
				    <tr>
				      <th scope="row">{{ $category->id }}</th>
				      <td>{{ $category->title }}</td>
				      <td>{{ $category->description }}</td>
				      <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
				    </tr>
				   
				   @endforeach
				  </tbody>
				</table>
            </div>
        </div>
    </div>
@endsection
