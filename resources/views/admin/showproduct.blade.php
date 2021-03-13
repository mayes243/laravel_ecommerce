@extends('admin.layout.adminheader')
@section('title','View Product')
@section('content-section')
<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Category information</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="right:0px;background-color:skyblue; width:100%;">
							{{@csrf_field()}}
						 <tr>
						 <th>Category Name</th> 
						 <th>Manufacture Name</th> 
						 <th>Product Name</th>
						 <th>Product Short Desc</th>
						 <th>Product long Desc</th>
						 <th>Product Price</th>
						 <th>Product Image</th>
						 <th>Product Size</th>
						 <th>Product Color</th>
						 <th>Publication Status</th>
						 <th>Product Quantity</th>
						 <th colspan="2">Action</th>
						</tr>
						@foreach($show as $s)
						 <tr class="danger">
						 	<td>{{$s->product->category_name}}</td>
						 	<td>{{$s->manu->manufacture_name}}</td>
						 	<td>{{$s->product_name}}</td>
						 	<td>{{$s->product_short_description}}</td>
						 	<td>{{$s->product_long_description}}</td>
						 	<td>{{$s->product_price}}</td>
						 	<td>
						 	@if($s->product_image==null)
						 	<img src="{{asset('admin/productimage/p.png')}}" height="48" width="50" style="border-radius:26px;">
						 	@else
						 	<img src="{{asset('admin/productimage')}}/{{$s->product_image}}" height="48" width="50" style="border-radius:26px;">
						 	@endif
						 	</td>
						 	<td>{{$s->product_size}}</td>
						 	<td>{{$s->product_color}}</td>
						 	<td>{{$s->publication_status}}</td>
						 	<td>{{$s->product_quantity}}</td>
						 	<td>
						 		<a href="{{route('editproduct',[$s->id])}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  </span></i> Edit</a>
						 	</td>
						 	<td>
						 	<a href="{{route('deleteproduct',[$s->id])}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close"></i></span> Delete</a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
	@endsection