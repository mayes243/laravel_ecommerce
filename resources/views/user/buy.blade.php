@extends('user.layout.userheader')
@section('title','Buy Now')
@section('content-section')
<style type="text/css">
	.product{
		height:200px !important;
		width:200px !important;
	}
	.product img{
		height:100% !important;
		width:100% !important;
	}
</style>
<!--Buy-now -->
<div class="buy-now">
		<div class="container">
		<div class="heading-setion-w3ls">
			<h3 class="title-w3layouts">Select Your Favourite Items<i class="fa fa-bell-o" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></h3>
		</div>
				<div class="team-grids">
					<!-- Bottom to top-->
					<div class="details-top-w3ls">
						<?php $i=1; ?>
						@foreach($view as $v)
						<div class="col-md-3 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<div class="img product">
									<img src="{{asset('admin/itemimage')}}/{{$v->item_image}}"  alt="img"><p class="btn btn-success">Sale</p><span style="color:red;">#00{{$i++}}</span>
								</div>
								<div class="info">
									<h3>Rs. {{$v->item_price}}</h3>
									<ul>
										<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
										<li><a href="#"><i title="like" class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li class="cary-li-w3-agileits">
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Product #001" />
														<input type="hidden" name="amount" value="95.00" />
														<input type="hidden" name="discount_amount" value="0.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button" />
													</fieldset>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
	</div>
@endsection