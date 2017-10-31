@extends('layouts.master')

@section('content')

<h1>Register</h1>
<hr>
<form method="POST" action="/register">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="email">Email Address</label>
		<input type="email" name="email" id="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control">
	</div>
	<div class="form-group">
		<label for="password_confirmation">Confirm Password</label>
		<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
	</div>
	@include('layouts.errors')
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary">Register</button>
	</div>
</form>

@endsection