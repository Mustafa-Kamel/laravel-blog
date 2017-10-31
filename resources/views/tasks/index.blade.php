<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tasks</title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task)
		<li style="display: inline; border: 1px solid blue; padding: 3px; margin:5px;"><a href="tasks/{{$task->id}}">{{$task->body}}</a></li>
		@endforeach
	</ul>
</body>
</html>