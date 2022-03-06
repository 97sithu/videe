@extends("layouts.app")

@section("content")
	<div class="container">
		@if(session('error'))
		<div class="alert alert-danger">
			{{session('error')}}
		</div>
		@endif
			<div class="card mb-4" style="height: 200px;background: #d0d3d4;">
				<div class="card-body">
					<h5 class="card-title">{{$course->name}}</h5>
					<div class="card-subtitle mb-2 text-muted small">
						{{$course->created_at->diffForHumans()}},
						User:<b>{{$course->lecturer}}</b>
						Category:<b>{{$course->language->name}}</b>
						Start-date:<b>{{$course->start_date}}</b>
					</div>
					
				
					<p class="card-text">{{$course->remark}}</p>
					
				</div>
				<a href="{{url("/register/$course->id")}}" style="margin-left: 90%;font-size: 20px;">Register</a>
			</div>

			@endsection
			