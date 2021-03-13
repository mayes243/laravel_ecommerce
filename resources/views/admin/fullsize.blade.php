@extends('admin.layout.adminheader')
@section('title','View Full Size')
@section('content-section')

		<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1">{{Auth::user()->username}}</h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Profile Picture</h4>
						<table class="table"> <thead>
							@if(Count($pp)==0)
							<p style="color:red;">"{{('Picture is not uploded right now')}}"</p>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">	
							<img src="{{asset('admin/adminimage/5.png')}}" height="100%" width="100%" alt="">
							</a>
							@else
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							@foreach($pp as $s)
							<img src="{{asset('admin/adminimage')}}/{{$s->image}}" height="100%" width="100%" alt="">	
							</a>
							@endforeach
							@endif
						</thead>
					</table>
					<a href="{{route('profile')}}"><button class="btn btn-primary"> Back </button></a>
					<a href="{{route('dashboard')}}"><button class="btn btn-danger" style="float: right;"> Home </button></a>
				</div>
			</div>
		</div>
	</div>
@endsection