@extends('admin.layout.adminheader')
@section('title','Show Shipping')
@section('content-section')
<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Shipping information</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="background-color:skyblue;">
						 <tr>
						 <th>First Name</th> 
						 <th>Middle Name</th>
						 <th>Last Name</th>
						 <th>E-mail</th>
						 <th>Address</th>
						 <th>Telephone</th>
						 <th colspan="2">Action</th>
						</tr>
						 @foreach($show as $s) 
						 <tr class="danger">
						 	<td>{{$s->first_name}}</td>
						 	@if($s->middle_name==null)
						 	<td>******</td>
						 	@else
						 	<td>{{$s->middle_name}}</td>
						 	@endif
						 	<td>{{$s->last_name}}</td>
						 	<td>{{$s->email}}</td>
						 	<td>{{$s->address}}</td>
						 	<td>{{$s->telephone}}</td>
						 	<td>
						 		<a href="{{route('editshipping',[$s->id])}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  Edit all</span></i></a></td>

						 	 <td>
						 	<a href="{{route('deleteshipping',[$s->id])}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close">  Delete</i></span></a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
@endsection