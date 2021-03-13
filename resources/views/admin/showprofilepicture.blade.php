@extends('admin.layout.adminheader')
@section('title','Show Profile Pictures')
@section('content-section')
<style type="text/css">
	.gallery{
		height:159px;
		width:175px;
		float: left;
		margin: 5px;
	}
	.image{
		border-radius:20px;
		margin-top:20px;
		height:100%;
		width:100%;
	}
</style>
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
					@foreach($show as $s)
						<div class="gallery">	
							<a href="{{route('profilefullsize',[$s->id])}}"><img class="image" src="{{asset('admin/adminimage')}}/{{$s->image}}">
						</div></a>
					 @endforeach	
				</div>
			</div>
		</div>
	</div>
@endsection