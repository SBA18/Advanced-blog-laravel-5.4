@extends('layouts.app')

@section('title', 'Create new post')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Creat new Category</h1>
    @include ('partials.errors')
    <hr>
    <form method="POST" action="/categories">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name='title' aria-describedby="titleHelp" required>
        <small id="titleHelp" class="form-text text-muted">Please enter the category title here. Make sure to enter at lest 5 to 255 characters</small>
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name='description' rows="10" required></textarea>
        <small id="bodyHelp" class="form-text text-muted">Please enter the category description here. Make sure to enter at lest 10 or more characters</small>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
@endsection
