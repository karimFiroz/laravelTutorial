<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Home Page</title>
</head>
<body>
	<a href="{{route('backend.dashboard')}}">Dashboard</a>|
<a href="{{route('frontend.contact')}}">Contact</a>|
<a href="{{route('frontend.about')}}">About</a>
	<h1>Home Page</h1>
{{$subjects[0].' '.$subjects[1].' '.$subjects[2]}}
{{$name}}{{$age}}
</body>
</html>