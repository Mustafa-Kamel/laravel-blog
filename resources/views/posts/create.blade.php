@extends('layouts.master')

@section('content')

<h1>Publish a Post</h1>
<hr>
<form method="POST" action="/posts">
	{{csrf_field()}}
	<div class="form-group">
		<label for="Title">Title</label>
		<input type="text" class="form-control" id="title" name="title" required>
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" id="body" name="body" required></textarea>
	</div>
	@include('layouts.errors')
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary">Publish</button>
	</div>
</form>

@endsection