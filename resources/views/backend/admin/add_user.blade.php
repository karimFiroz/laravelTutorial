@extends('backend.master')
@section('main_content')



<a href="{{route('backend.create')}}">Create New User</a>
<div class="container">



	<form class="form-horizontal"action="{{route('backend.store')}}"method="post" data-parsley-validate>


    @if($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
      </ul>
    </div>
    
@endif

		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your"requird>
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"requird>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"requird>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection