@extends('admin.layout.adminheader')
@section('title','View Manufacture')
@section('content-section')
<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Manufacture information</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="background-color:skyblue;">
						 <tr>
						 <th>Sn</th>
						 <th>Manufacture Name</th> 
						 <th>Manufacture Description</th>
						 <th>Publication Status</th>
						 <th>Category name</th>
						 <th >Action</th>
						</tr>
						<?php $i=1; ?>
						@foreach($view as $v)
						 <tr class="danger">
						 	<td>{{$i++}}</td>
						 	<td>{{$v->manufacture_name}}</td>
						 	<td>{{$v->manufacture_description}}</td> 
						 	<td>{{$v->publication_status}}</td>
						 	<td>{{$v->category->category_name}}</td>
						 	<td>
						 		<a href="{{route('editmanufacture',[$v->id])}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  Edit all</span></i></a></td>

						 	 <td>
						 	<a href="{{route('deletemanu',[$v->id])}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close">  Delete</i></span></a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
	@endsection