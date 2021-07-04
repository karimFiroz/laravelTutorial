@extends('backend.master')
@section('main_content')
<a href="{{route('frontend.addUser')}}" class="nav-link">User Registration</a>

<div class="container">
	
	
	
	<table class="table table-responsive table-hover">
		<tr>
			<th>Sl</th>
			<th>ID</th>
			<th>Admin_ID</th>
			<th>Group_ID</th>
			<th>Group</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone</th>
			<th>Address</th>
			
		</tr>
		@php
		$i=0;
		@endphp
@foreach($users as $user)
		@php
		$i++;
		@endphp
		<tr>
			<td>{{$i}}</td>
			<td>{{$user->id}}</td>
			<td>{{$user->admin_id}}</td>
			<td>{{$user->group_id}}</td>
			<td>{{$user->group}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->phone}}</td>
			<td>{{$user->address}}</td>
			
		</tr>
@endforeach
	</table>
</div>

@endsection