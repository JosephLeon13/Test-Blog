@extends('layouts.app')

@section('content')
	
	<div class="container">

		<h1>Edit Post</h1>

		<hr>

		  <form method="POST" action="/posts/{{ $post->id }}">

		  	{{ csrf_field() }}

		  	{{ method_field('PUT') }}

			    <div class="form-group">
			      <label for="Title">Title:</label>
			      <input type="text" class="form-control" id="title" name='title' value="{{ $post->title }}">
			    </div>

			    <div class="form-group">
			      <label for="body">Body:</label>
			      <textarea id="body" name='body' class="form-control">{{ $post->body }}</textarea>
			    </div>

			    <div class="form-group">
			    	<button type="submit" class="btn btn-primary">Save</button>
			    </div>

				@include('layouts.errors')

  		  </form>

  		  <form method="POST" action="/posts/{{ $post->id }}">

  		  	{{ csrf_field() }}

  		  	{{ method_field('DELETE') }}
  		  	
  		  	<button type="submit" class="btn btn-danger">Delete</button>

  		  </form>
  		  

	</div>

	

@endsection