@extends('admin.layout.adminheader')
@section('title','Add Customer')
@section('content-section')
  <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Customer Register Forms</h2>
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

                            <form method="post" action="{{route('addcustomer')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>

                                @if($errors->has('fname'))
                                <span style="color:red;"><strong>{{$errors->first('fname')}}</strong></span>
                                @endif

                                 <input type="text" class="form-control" placeholder="Enter Customer First Name" name="fname">
                                </div>

                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Customer Middle Name" name="mname">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>

                                @if($errors->has('lname'))
                                <span style="color:red;"><strong>{{$errors->first('lname')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Customer Last Name" name="lname">
                                </div>
                         
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> E-mail:</label>

                                @if($errors->has('email'))
                                <span style="color:red;"><strong>{{$errors->first('email')}}</strong></span>
                                @endif

                                <input type="email" class="form-control" placeholder="Enter Customer Email Address" name="email">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Address:</label>

                                @if($errors->has('address'))
                                <span style="color:red;"><strong>{{$errors->first('address')}}</strong></span>
                                @endif

                                 <input type="Address" class="form-control" placeholder="Enter Customer Address" name="address">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Contact:</label>

                                @if($errors->has('contact'))
                                <span style="color:red;"><strong>{{$errors->first('contact')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Customer Contact Number" name="contact">
                                </div>
                                <div class="form-group">
                                Gender:
                                <input type="radio" name="gender" value="male">Male |
                                <input type="radio" name="gender" value="female">Female |
                                <input type="radio" name="gender" value="others">
                                Others
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