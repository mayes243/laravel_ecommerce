@extends('admin.layout.adminheader')
@section('title','View Category')
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
						<table class="table" style="background-color:skyblue;">
						 <tr>
						 <th>Category Name</th> 
						 <th>Category Description</th>
						 <th>Publication Status</th>
						 <th>Created By</th>
						 <th>Modified By</th>
						 <th >Action</th>
						</tr>
						@foreach($show as $s)
						 <tr class="danger">
						 	<td>{{$s->category_name}}</td>
						 	<td>{{$s->category_description}}</td>
						 	<td>{{$s->publication_status}}</td>
						 	<td>{{$s->created_by}}</td>
						 	<td>{{$s->modified_by}}</td>
						 	<td>
						 		<a href="{{route('editcat',$s->id)}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  Edit all</span></i></a></td>

						 	 <td>
						 	<a href="{{route('deletecat',$s->id)}}" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close">  Delete</i></span></a></td>
						 </tr>
						 @endforeach
						 </table>
						</div>
					</div>
				</div>
			</div>
	@endsection