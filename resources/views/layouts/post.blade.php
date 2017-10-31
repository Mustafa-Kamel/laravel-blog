<div class="blog-post">
	<a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
	<p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{ $post->user->name }}</a></p>
	@if (any($tags = $post->tags))
		<ol class="list-unstyled">
			@foreach($tags as $tag)
			<li><a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
			@endforeach
		</ol>
	@endif
	<p>{{$post->body}}</p>
</div><!-- /.blog-post -->