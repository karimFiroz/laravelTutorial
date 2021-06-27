@extends('backend.master')
@section('main_content')
<a href="{{route('backend.addUser')}}" class="nav-link">Add New User</a>

<div class="container">
	
	
	
	<table class="table table-responsive table-hover">
		<tr>
			<th>Sl</th>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>
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
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
			<td>
				<a href="{{route('backend.edit', $user->id)}}" class="btn btn-success btn-sm">Edit</a>
			</td>
		</tr>
@endforeach
	</table>
</div>

@endsection