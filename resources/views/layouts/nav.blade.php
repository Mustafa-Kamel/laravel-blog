<div class="blog-masthead">
	<div class="container-fluid">
		<nav class="nav blog-nav">
			<a class="nav-link active" href="/posts">Home</a>
			<a class="nav-link" href="/posts/create">Create Post</a>
			<a class="nav-link" href="#">Press</a>
			<a class="nav-link" href="#">New hires</a>
			<a class="nav-link" href="#">About</a>
			<div class="ml-auto d-flex flex-row">
				@if(auth()->check())
					<div class="nav-link text-white">{{ Auth::user()->name }}</div>
					<a href="/logout" class="nav-link">Logout</a>
				@else
					<a href="/login" class="nav-link">Sign In</a>
					<a href="/register" class="nav-link">Register</a>
				@endif
			</div>
		</nav>
	</div>
</div>