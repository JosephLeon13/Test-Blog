<section class="jumbotron text-center">
	<div class="container">
		<h1 class="jumbotron-heading">

		<a href="/posts/{{ $post->id }}">

			{{ $post->title }}
			
		</a>

		</h1>

		<a href="/posts/{{ $post->id }}/edit">

			Edit
			
		</a>

		<hr>

		<p class="blog-post-meta">

			By: {{ $post->user->name }}
			
		</p>

		<p class="lead text-muted">
			{{ $post->body }}
		</p>

		

		
	</div>
	
</section>