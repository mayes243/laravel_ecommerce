@extends('admin.layout.adminheader')
@section('title','Show items')
@section('content-section')
<div id="page-wrapper">
<div class="main-page">
<div class="forms">
<div class="gallery" id="gallery">
	<div class="container">
		<div class="heading-setion-w3ls">
						<h1 class="title-w3layouts"><u>Items Gallery:</u></h1><br>
							@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
                            <div class="clearfix"> </div>
					</div>
					
					
						<div class="row">
							@foreach($view as $view)
							<div class="col-md-3">
								<a  href="{{asset('admin/itemimage')}}/{{$view->item_image}}" class="b-link-stripe b-animate-go  swipebox" title="Prezzie">
							<div class="agile_work_grid w3_agileits_sub_work">
							<img src="{{asset('admin/itemimage')}}/{{$view->item_image}}" controls="controls" style=" border-radius:40px;" alt="" class="img-responsive" />

							<div class="agileits_w3layouts_work">

								<a href="{{asset('admin/itemimage')}}/{{$view->item_image}}" download=""><img src="{{asset('admin/images/33.jpg')}}" height="20" width="20"></a>
								
							<p style="font-size:18px;color:darkgreen;font-family:'',cursive;">Name: {{$view->item_name}}</p><br>
						<a href="">Edit</a> | <a href="{{route('deleteitem',[$view->id])}}" onclick="return confirm('Are you Sure Want To delete this file')">Delete</a>
							</div>
							</div>
						</a>
							</div>
							@endforeach
						</div>

					
				</div>
				<div class="clearfix"> </div>
				{{$shoow->links()}}
			</div>
		</div>
	</div>	
</div>

@endsection