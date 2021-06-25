
@extends('backend.login_master')
@section('login_content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Home Page</title>
</head>
<body>
	
	<h1>Home Page</h1>

Name:{{$name}}<br>
Roll:{{$roll}}<br>
Subjects:<br>{{$subject[0]}}<br>{{$subject[1]}}<br>{{$subject[2]}}
</body>
</html>
@endsection