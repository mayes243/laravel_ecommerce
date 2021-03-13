@extends('admin.layout.adminheader')
@section('title','Show Customer')
@section('content-section')
<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Customer information</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="background-color:skyblue;">
						 <tr>
						 <th>Sn</th>
						 <th>Customer First Name</th> 
						 <th>Customer Middle Name</th>
						 <th>Customer Last Name</th>
						 <th>Customer E-mail</th>
						 <th>Customer Address</th>
						 <th>Customer Telephone</th>
						 <th>Gender</th>
						 <th colspan="2">Action</th>
						</tr>
						<?php $i=1; ?>
						@foreach($view as $v)
						 <tr class="danger">
						 	<td>{{$i++}}</td>
						 	<td>{{$v->first_name}}</td>
						 	@if($v->middle_name==null)
						 	<td>******</td>
						 	@else
						 	<td>{{$v->middle_name}}</td>
						 	@endif
						 	<td>{{$v->last_name}}</td>
						 	<td>{{$v->email}}</td>
						 	<td>{{$v->address}}</td>
						 	<td>{{$v->phone}}</td>
						 	<td>{{$v->gender}}</td>
						 	<td>
						 		<a href="{{route('editcustomer',[$v->id])}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  Edit all</span></i></a></td>

						 	 <td>
						 	<a href="{{route('deletecustomer',[$v->id])}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close">  Delete</i></span></a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection