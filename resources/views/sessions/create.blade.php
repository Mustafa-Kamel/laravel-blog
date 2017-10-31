@extends('layouts.master')

@section('content')

<h1>Sign In</h1>
<hr>
@include('layouts.errors')
<form method="POST" action="/login">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="email">Email Address</label>
		<input type="email" name="email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control">
	</div>
	<div class="form-group text-center">
		<button type="submit" class="btn btn-success mr-3">Sign In</button>
		<a href="/register" class="btn btn-info">Register</a>
	</div>
</form>

@endsection