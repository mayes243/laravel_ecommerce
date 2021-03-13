@extends('user.layout.userheader')
@section('title','Gallery')
@section('content-section')
<style type="text/css">
	.product{
		height:200px !important;
		/*width:200px !important;*/
	}
</style>
<!--Gallery -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="gallery" id="gallery">
	<div class="container">
		<div class="heading-setion-w3ls">
						<h3 class="title-w3layouts">Items Gallery <i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
					</div>
					@foreach($view as $v)
			<div class="agileinfo_work_grids">
				<div class="col-md-4 w3_agile_work_grid gallery1" style="height:270px;width:270px; margin-top:130px;">
					
					<div class="wthree_work_grid1" >
						<a href="{{asset('admin/itemimage')}}/{{$v->item_image}}" class="b-link-stripe b-animate-go  swipebox text-capitalize" title="{{$v->item_name}}">
							<div class="agile_work_grid w3_agileits_sub_work" >
							<img class="product" src="{{asset('admin/itemimage')}}/{{$v->item_image}}" style="float: left;"  alt=" " class="img-responsive" />
							<div class="agileits_w3layouts_work">
							{{$v->item_name}}
							</div>
							</div>
						</a>
					</div><br>
					<h1 style="margin-left:20px;text-transform:capitalize;"><a href="">&nbsp;&nbsp;{{$v->item_name}}<br>
						<strong style="font-size: 20px;">Price:- $ <del style="font-size: 20px;">10,00,000</del></strong><br>
						 <strong style="font-size:20px;">Price:- $ {{$v->item_price}}</strong></a></h1>
				</div>
			</div>
			@endforeach	
		</div>
	</div>	
<!-- //Gallery -->
<div style="margin-top:130px;"></div>
@endsection
