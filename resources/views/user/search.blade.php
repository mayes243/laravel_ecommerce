@extends('user.layout.userheader')
@section('title','Gallery')
@section('content-section')
<!--Gallery -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="gallery" id="gallery">
	<div class="container">
		<div class="heading-setion-w3ls">
			@if(Count($search)==0)
					<div class="jumbotron">
					  <p class="lead">{{'Sorry !! no any items are available here that you will search, please try another one...!!!!'}} </p>
					  <hr class="my-4"> 
					</div>
					@else
						<h3 class="title-w3layouts">Search Result<i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
					</div>
			@foreach($search as $v)
			<div class="agileinfo_work_grids">
				<div class="col-md-4 w3_agile_work_grid gallery1" style="height:270px;width:270px; margin-top:130px;">
					<div class="wthree_work_grid1" >
						<a href="{{asset('admin/itemimage')}}/{{$v->item_image}}" class="b-link-stripe b-animate-go  swipebox" title="Prezzie">
							<div class="agile_work_grid w3_agileits_sub_work" >
							<img src="{{asset('admin/itemimage')}}/{{$v->item_image}}" style="float: left;"  alt=" " class="img-responsive" />
							<div class="agileits_w3layouts_work">
							{{$v->item_name}}
							</div>
							</div>
						</a>
					</div><br>
					<h1 style="margin-left:20px;"><a href="">&nbsp;&nbsp;{{$v->item_name}}<br>
						<strong style="font-size: 20px;">Price:- Rs.<del style="font-size: 20px;">10,00,000</del></strong><br>
						<strong style="font-size:20px;">Price:- Rs. {{$v->item_price}}</strong></a></h1>
				</div>
			</div>
			@endforeach	
		</div>
		@endif
	</div>	
<!-- //Gallery -->
<div style="margin-top:130px;"></div>
@endsection