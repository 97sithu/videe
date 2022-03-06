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
		<h1 style="text-align: center;">Add Languages</h1>
		<form action="{{url("/courses/admin/addLanguages")}}" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Language">
			</div>
			<input type="submit" value="Submit Booking" class="btn btn-primary">
		</form>
	</div>
	</div
@endsection