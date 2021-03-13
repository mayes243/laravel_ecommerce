@extends('admin.layout.adminheader')
@section('title','all messages')
@section('content-section')
<br><br>
<div id="page-wrapper">
<div class="col-md-4 span_8">
<div class="activity_box">
					<h2>Inbox</h2>
					<div class="scrollbar" id="style-1">
						<div class="activity-row">
							@foreach($showw as $ss)
							<div class="col-xs-3 activity-img"><img src="{{asset('admin/adminimage/a.png')}}" width="70" height="70" class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">{{$ss->first_name}} {{$ss->last_name}}</a></h5>
								<a href="#"><p>{{$ss->messages}}</p></a>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>{{Carbon\Carbon::parse($ss->created_at)->diffForHumans()}}</h6></div>
						
							<div class="clearfix"> </div>
								@endforeach
						</div>
						{{$showw->links()}}
					</div>
				</div>
			</div>
			</div>
			<div class="clearfix"></div>
@endsection
