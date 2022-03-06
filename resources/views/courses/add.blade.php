@extends('layouts.app')
@section('content')
	<div class="container" style="background: #C0C0C0">
		@if($errors->any())
		<div class="alert alert-warning">
			<ol>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ol>
		</div>
		@endif
		<form action="{{url("/course/add")}}" method="post">
			@csrf
			<input type="hidden" name="course_id" value="{{$course_id}}">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<label>Phone number </label>
				<input type="Phone" name="phone_no" class="form-control" placeholder="Enter your phone number">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="Email" name="email" class="form-control" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="Address" name="address" class="form-control" placeholder="Enter your address"> 
			</div>
			<input type="submit" value="Submit Booking" class="btn btn-primary">
		</form>
	</div>
	@endsection