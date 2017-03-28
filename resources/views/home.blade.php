@extends('layouts.app')

@section('content')
    <div class="col-sm-8 blog-main">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
			<div class="panel-heading"><a href="/posts/user/{{Auth::user()->id}}">My posts</a> | <a href="/posts/create">Create post</a> | <a href="/categories/list">Categories</a> | <a href="/categories/create">Create Category</a></div>
            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>
@endsection
