@extends('admin.layout.adminheader')
@section('title','Profile')
@section('content-section')

		<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1">{{Auth::user()->username}}</h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Profile</h4>
						<table class="table"> 
							<thead>
								@if(count($pp)==0)
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div style="margin-left:30%;" class="profile_img">	
									<a href="{{route('fullsize')}}">
										<span class="prfil-img">
										<img src="{{asset('admin/adminimage/5.png')}}" height="200" width="200" alt=""></a></span> 
									<div class="user-name">
										<p>Full Name:{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p><br>
										<p>Email:{{Auth::user()->email}}</p>
									</div>	
								</div>	
							</a>
							@else
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div style="margin-left:30%;" class="profile_img">	
									<a href="{{route('fullsize')}}">
										@foreach($pp as $s)
									<span class="prfil-img">
										<img src="{{asset('admin/adminimage')}}/{{$s->image}}" height="200" width="200" alt=""></a></span> 
										@endforeach
									<div class="user-name">
										<a href="{{route('personal')}}"><p>Full Name:{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p></a><br>
										
									</div>	
								</div>	
							</a>
							@endif
						</thead>
					</table>
					<a href="{{route('fullsize')}}">View Full Size</a> | <a href="{{route('personal')}}">Personal information</a> |  <a href="{{route('updateprofile',[Auth::user()->id])}}">Update Profile Picture</a> | <a href="{{route('profilepicture')}}">Pictures</a>
				</div>
			</div>
		</div>
	</div>
@endsection