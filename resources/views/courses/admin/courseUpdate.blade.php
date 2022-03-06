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
		<h1 style="text-align: center;">Edit Courses</h1>
		<form action="{{url("/courses/admin/editCourses/$courses->id")}}" method="post">
			@csrf
		
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter course name" value="{{$courses->name}}">
			</div>
			<div class="form-group">
				<label>School</label>
				<input type="text" name="group" class="form-control" placeholder="Enter school" value="{{$courses->group}}">
			</div>
			<div class="form-group">
				<label>Lecturer</label>
				<input type="text" name="Lecturer" class="form-control" placeholder="Enter Lecturer" value="{{$courses->lecturer}}">
			</div>
			<div class="form-group">
				<label>Language</label>
				<select class="form-control" name="language_id">
					<option value="{{$courses->language_id}}">{{$courses->language->name}}</option>
					@foreach($languages as $language)
					<option value="{{$language->id}}">{{$language->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Start Date</label>
				<input type="date" name="start_date" class="form-control" placeholder="Enter Start Date" value="{{$courses->start_date}}">
			</div>
			<div class="form-group">
				<label>Remark</label>
				<textarea name="remark" class="form-control">{{$courses->remark}}</textarea>
			</div>
			<input type="submit" value="Update" class="btn btn-primary">
		</form>
	</div>
	</div
@endsection