@extends('admin.layout.adminheader')
@section('title','Profile Pictures')
@section('content-section')

		<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						
						<a href="{{route('showprofilepicture')}}"><img src="{{asset('admin/adminimage/f.png')}}" height="250" width="250"></a><figcaption style="padding-left:60px; font-size:20px; color:gray;">Profile Pictures</figcaption>
						
				</div>
				<div>
				<h2><a href="">Add New Album</a></h2>
				</div>
			</div>
		</div>
	</div>
@endsection