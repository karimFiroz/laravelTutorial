
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('public/backend/admin')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
	<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('public/backend/admin')}}/images/firoz.jpg" alt="IMG">
				</div>

 

	@yield('login_content')
	
	
</div>
	</div>
	</div>
<!--===============================================================================================-->	
	<script src="{{asset('public/backend/admin')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('public/backend/admin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin')}}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin')}}/js/main.js"></script>
	<div class="container">
<div class="footer"style="background:#000;color:#fff;">
	<ul >
<li><a href="{{route('frontend.home')}}">Home</a></li>
<li><a href="{{route('backend.login')}}" class="nav-link">Login</a></li>
<li><a href="{{route('backend.logout')}}" class="nav-link">Logout</a></li>

<li><a href="{{route('frontend.contact')}}">Contact</a></li>
<li><a href="{{route('frontend.about')}}">About</a></li>
</ul>
	</div>
	</div>
</body>
</html>
