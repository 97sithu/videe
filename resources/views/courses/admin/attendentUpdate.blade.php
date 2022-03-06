@extends("layouts.menubar")
@extends("layouts.app")
@section("content")
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<div class="main1">
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
		<h1 style="text-align: center;">Add Attendents</h1>
		<form action="{{url("/courses/admin/editAttendents/$attendents->id")}}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter attendent name" value="{{$attendents->name}}">
			</div>
			<div class="form-group">
				<label>phone no</label>
				<input type="phone" name="phone_no" class="form-control" placeholder="Enter phone no" value="{{$attendents->phone_no}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter email" value="{{$attendents->email}}">
			</div>
			<div class="form-group">
				<label>Address</label>
				<textarea name="address" class="form-control" placeholder="Enter address">
					{{$attendents->address}}
				</textarea>
			</div>
			<div class="form-group">
				<label>Course</label>
				<select class="form-control" name="course_id">
					<option value="{{$attendents->course_id}}">{{$attendents->course->name}}</option>
					@foreach($courses as $course)
					<option value="{{$course->id}}">{{$course->name}}</option>
					@endforeach
				</select>
			<input type="submit" value="Submit Booking" class="btn btn-primary">
		</form>
	</div>
	</div
@endsection