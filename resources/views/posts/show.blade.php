@extends('layouts.app')

@section('content')

<section class="jumbotron text-center">
	<div class="container">
		<a href="/posts/{{ $post->id }}/edit">

			Edit
			
		</a>
		<h1 class="jumbotron-heading">

			{{ $post->title }}

		</h1>

		<hr>

		<p class="lead text-muted">

			{{ $post->body }}
			
		</p>

		<hr>

		<!--

		<div class="comments">

			<ul class="list-group">

				@foreach ($post->comments as $comment)

					<li class="list-group-item">

						{{ $comment->body }}
						
					</li>

				@endforeach

			</ul>

		</div>

		<hr>

		<div class="card">

			<div class="card-block">

				<form method="POST" action="/posts/{{ $post->id }}/comments">

					{{ csrf_field() }}
					
					<div class="form-group">

						<textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
						
					</div>

					<div class="form-group">

						<button type="submit" class="btn btn-primary">Add Comment</button>
						
					</div>

				</form>
				
			</div>
			
		</div>
	-->


	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body">
                    <post-comments :comments="comments"></post-comments>
                </div>
                <div class="panel-footer">
                    <comment-form
                        v-on:commentsent="sendComment"
                        :user="{{ Auth::user() }}"
                    ></comment-form>
                </div>
            </div>
        </div>
    </div>
</div>
		
	</div>

	@include('layouts.errors')
	
</section>


@endsection