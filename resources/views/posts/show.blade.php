@extends('layouts.master')

@section('content')

@include('layouts.post')

<hr>
<ul class="list-group">
	@foreach($post->comments as $comment)
	<li class="list-group-item flex-column align-items-start">
		<p class="mb-3">{{ $comment->body }}</p>
		<div class="d-flex w-100 justify-content-between">
			<small class="text-muted">PUBLISHER</small>
			<small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
		</div>
	</li>
	@endforeach
</ul>

@if (auth()->check())
<div class="card card-block my-5">
	@include('layouts.errors')
	<form method="POST" action="/posts/{{ $post->id }}/comment">
		{{ csrf_field() }}
		<div class="form-group">
			<textarea class="form-control" name="body" placeholder="Type your comment" required></textarea>
		</div>
		<div class="form-group text-right">
			<button type="submit" class="btn btn-sm btn-primary">Comment</button>
		</div>
	</form>
</div>
@endif
@endsection