<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>
</head>
<body>
	@foreach ($names as $name)
	<h1 style="text-align: center;">Hello {{$name}}</h1>
	@endforeach
</body>
</html>