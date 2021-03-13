@extends('admin.layout.adminheader')
@section('title','View order')
@section('content-section')
<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Order information</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="right:0px;background-color:skyblue; width:100%;">
							{{@csrf_field()}}
						 <tr>
						 <th>Sn</th>
						 <th>Customer Name</th>
						 <th>Shipping Name</th>
						 <th>Payment Method</th>
						 <th>Number of Total Order</th>
						 <th>Order Status</th>
						 <th>Order Date & Time</th>
						 <th colspan="2">Action</th>
						</tr>
						<?php $i=1; ?>
						@foreach($show as $s)
						 <tr class="danger">
						 	<td>{{$i++}}</td>
						 	<td>{{$s->cus->first_name}} - {{$s->cus->last_name}}</td>
						 	<td>{{$s->ship->first_name}} - {{$s->ship->last_name}}</td>
						 	<td>via {{$s->pay->payment_method}}</td>
						 	<td>{{$s->order_total}} ITEMS</td>
						 	<td>{{$s->order_status}}</td>
						 	<td>{{$s->order_date_time}}</td>
						 	<td>
						 		<a href="{{route('editorder',[$s->id])}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit"> Edit </span></i></a>
						 	</td>
						 	<td>
						 	<a href="{{route('deleteorder',[$s->id])}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close"></i> Delete </span></a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
	@endsection