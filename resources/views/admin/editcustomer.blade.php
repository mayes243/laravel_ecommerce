@extends('admin.layout.adminheader')
@section('title','Edit Customer')
@section('content-section')
  <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Customer Update Forms</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Customer Form:</h4>
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('message'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('updatecustomer',$edit->id)}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>

                                 <input type="text" class="form-control" placeholder="Enter Customer First Name" name="fname" value="{{$edit->first_name}}">
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Customer Middle Name" name="mname" value="{{$edit->middle_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>

                                <input type="text" class="form-control" placeholder="Enter Customer Last Name" name="lname" value="{{$edit->last_name}}">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> E-mail:</label>

                                <input type="email" class="form-control" placeholder="Enter Customer Email Address" name="email" value="{{$edit->email}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Address:</label>

                                 <input type="Address" class="form-control" placeholder="Enter Customer Address" name="address" value="{{$edit->address}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Contact:</label>

                                <input type="text" class="form-control" placeholder="Enter Customer Contact Number" name="contact" value="{{$edit->phone}}">
                                </div>
                                <div class="form-group">
                                Gender:
                                @if($edit->gender=='male')
                                <input type="radio" name="gender" value="male" checked="">Male
                                <input type="radio" name="gender" value="female">Female
                                @endif
                                @if($edit->gender=='female')
                                <input type="radio" name="gender" value="male" >Male
                                <input type="radio" name="gender" value="female" checked="">Female
                                @endif
                                @if($errors->has('gender'))
                                <span style="color:red;"><strong>{{$errors->first('gender')}}</strong></span>
                                @endif
                            	</div>
                                    <input type="submit" class="btn btn-success" value="Submit">
                                    <input type="reset" class="btn btn-danger" value="Reset"> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection