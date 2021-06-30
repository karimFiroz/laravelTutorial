@extends('backend.login_master')

@section('login_content')
<li><a href="{{route('frontend.home')}}">Home</a></li>
<div class="login100-pic js-tilt" data-tilt>
	<img src="{{asset('storage/app/public/')}}/images/1.jpg" alt="IMG">
 </div>  
				<form class="login100-form validate-form"action="check" method="post">
					@csrf
					<span class="login100-form-title">
					Login First!!
						<span>


						<h6 style="color:red">
								<?php
						$exception=Session::get('exception');
						if($exception){
							echo $exception;
							Session::put('exception','');
						}
								?>
						</h6>

						<h6 style="color:green">
								<?php
						$message=Session::get('message');
						if($message){
							echo $message;
							Session::put('message','');
						}
								?>
						</h6>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="{{asset('public/backend/admin')}}/#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{asset('public/backend/admin')}}/#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			
@endsection