@extends("layouts.app")
@section("content")
 
 	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<div class="container">
		@if(session('info'))
		<div class="alert alert-info">
			{{session('info')}}
		</div>
		@endif
		<div class="sidebar">
			<ul class="cats">
				<li><a href="{{url("/")}}">All Language</a></li>
				@foreach($languages as $language)
				<li><a href="{{url("/courses/$language->id")}}">{{$language->name}}</a></li>
				@endforeach
			</ul>
		</div>
		<div style="margin-left: 30px;">{{$courses->links() }}</div>
		@foreach($courses as $course)
			<div class="show">
				<div class="card-body" style="position: all;">
					<h5 class="card-title">{{$course->name}}</h5>
					<div class="card-subtitle mb-2 text-muted small">
						<b>Course: </b>{{$course->group}}					
						<b>Lecturer: </b>{{$course->lecturer}},
						<b>Languae: </b>{{$course->language['name']}},
						{{$course->created_at->diffForHumans()}}
					</div>
					<p class="card-text">{{$course->start_date}}</p>
					<br>
					<a href="{{url("/detail/$course->id")}}">View Detail</a>
				</div>
			</div>
			@endforeach
		
	</div>
	@endsection