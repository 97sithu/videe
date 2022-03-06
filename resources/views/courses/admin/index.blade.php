@extends("layouts.menubar")
@extends("layouts.app")
@section("content")
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<div class="main1">
		<table class="tb">
			<tr style="border:1px solid black"><th>Courses <span>{{$courses}}</span></th></tr>
			<tr><td>Name</td></tr>
			<tr><td>Group</td></tr>
			<tr><td>Lecturer</td></tr>
			<tr><td>Language</td></tr>
			<tr><td>Start Date</td></tr>
			<tr><td>Remark</td></tr>
		</table>		
		<table class="tb1">
			<tr style="border:1px solid black"><th>Attendents <span>{{$attendents}}</span></th></tr>
			<tr><td>Name</td></tr>
			<tr><td>Phone No</td></tr>
			<tr><td>Email</td></tr>
			<tr><td>Address</td></tr>
			<tr><td>Course</td></tr>
		</table>
		<table class="tb2">
			<tr style="border:1px solid black"><th>Languages <span>{{$language ?? ''}}</span><span>{{$abc ?? ''}}</span></th></tr>
			<tr><td>Name</td></tr>
		</table>
	</div>
@endsection
