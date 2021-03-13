@extends('admin.layout.adminheader')
@section('title','Admin Shipping')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Shipping Form</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('addshipping')}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>

                                @if($errors->has('fname'))
                                <span style="color:red;"><strong>{{$errors->first('fname')}}</strong></span>
                                @endif

                                 <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname">
                                </div>

                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Middle Name" name="mname">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>

                                @if($errors->has('lname'))
                                <span style="color:red;"><strong>{{$errors->first('lname')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> E-mail:</label>

                                @if($errors->has('email'))
                                <span style="color:red;"><strong>{{$errors->first('email')}}</strong></span>
                                @endif

                                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Address:</label>


                                @if($errors->has('address'))
                                <span style="color:red;"><strong>{{$errors->first('address')}}</strong></span>
                                @endif

                                 <input type="Address" class="form-control" placeholder="Enter Your Address" name="address">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Contact:</label>

                                @if($errors->has('contact'))
                                <span style="color:red;"><strong>{{$errors->first('contact')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="contact">
                                </div> 
                                    <div class="checkbox">  
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