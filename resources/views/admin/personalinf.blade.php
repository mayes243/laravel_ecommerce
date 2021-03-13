@extends('admin.layout.adminheader')
@section('title','Profile')
@section('content-section')

		<div id="page-wrapper">
			<div class="mainpage">
				<div class="tables">
					<h2 class="title1">{{Auth::user()->username}}</h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">Personal information</h4>
						<table class="table" style="background-color:tan;">
							{{csrf_field()}}
						 <tr>
						 <th>First Name</th>
						 <th>Middle Name</th> 
						 <th>Last Name</th>
						 <th>Username</th>
						 <th>E-mail</th>
						 <th>Address</th>
						 <th>Last Login</th>
						 <th>Contact</th>
						 <th>Gender</th>
						 <th colspan="2">Action</th>
						</tr>
						@foreach($show as $s)
						 <tr class="danger">  
						 	<td>{{$s->first_name}}</td>

						 	@if($s->middle_name=="")
						 	<td>*****</td>
						 	@else
						 	<td>{{$s->middle_name}}</td>
						 	@endif

						 	<td>{{$s->last_name}}</td> 
						 	<td>{{$s->username}}</td>
						 	<td>{{$s->email}}</td>
						 	<td>{{$s->address}}</td>

						 	@if($s->last_login=="")
						 	<td>no login at</td>
						 	@else
						 	<td>{{$s->last_login}}</td>
						 	@endif

						 	<td>{{$s->contact}}</td>
						 	<td>{{$s->gender}}</td>
						 	<td><a href="{{route('editdata',$s->id)}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit">  Edit all</span></i></a></td>

						 	<!-- <td><a href=""><span class="btn btn-danger"><i class="fa fa-close">  Delete</i></span></a></td> -->
						 </tr>
						 @endforeach
</table>
</div>
</div>
</div>

			<div class="mainpage">
				<div class="tables">
					<h2 class="title1"></h2>
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4 style="font-family:'',cursive;">All Admins</h4>
						@if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
						<table class="table" style="background-color:skyblue;">
							{{csrf_field()}}
						 <tr>
						 <th>First Name</th>
						 <th>Middle Name</th> 
						 <th>Last Name</th>
						 <th>Username</th>
						 <th>E-mail</th>
						 <th>Address</th>
						 <th>Last Login</th>
						 <th>Contact</th>
						 <th>Gender</th>
						 <th>Admin Image</th>
						 @if(Auth::user()->role=='super')
						 <th>Action</th>
						 @endif
						</tr colspan="2">
						@foreach($sho as $s)
						 <tr class="danger"> 
						 	<td>{{$s->first_name}}</td>

						 	@if($s->middle_name=="")
						 	<td>******</td>
						 	@else
						 	<td>{{$s->middle_name}}</td>
						 	@endif
						 	<td>{{$s->last_name}}</td> 
						 	<td>{{$s->username}}</td>
						 	<td>{{$s->email}}</td>
						 	<td>{{$s->address}}</td>

						 	@if($s->last_login=="")
						 	<td>{{$s->username}} is not logged in</td>
						 	@else
						 	<td>{{$s->last_login}}</td>
						 	@endif

						 	<td>{{$s->contact}}</td>
						 	<td>{{$s->gender}}</td>

						 	@if($s->image=="")
						 	<td><img src="{{asset('admin/adminimage/5.png')}}" height="65" width="65" style="border-radius:50px;"></td>
							@else
						 	<td><img src="{{asset('admin/adminimage')}}/{{$s->image}}" height="65" width="65" style="border-radius:50px;"></td>
						 	@endif
						 	@if(Auth::user()->role=='super')
						 	<td>
						 		<a href="{{route('editdata',$s->id)}}" onclick="return confirm('Are You Sure Want To Edit All ??')"><i class="fa fa-edit">  Edit </i></a></td>
						 	<td><a href="{{route('deleteadmin',$s->id)}}" onclick="return confirm('Are You sure Want to delete Admin')"><i class="fa fa-close">  Delete</i></a></td>
						 	@endif
						 </tr>
						 @endforeach
</table>
</div>
</div>
</div>
</div>
@endsection