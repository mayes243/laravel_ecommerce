@extends('admin.layout.adminheader')
@section('title','Edit Shipping')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Admin Register Forms</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Basic Form:</h4>
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('updateshipping',$edit->id)}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>

                                 <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname" value="{{$edit->first_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Middle Name" name="mname" value="{{$edit->middle_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>

                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" value="{{$edit->last_name}}">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> E-mail:</label>

                                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" value="{{$edit->email}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Address:</label>

                                 <input type="Address" class="form-control" placeholder="Enter Your Address" name="address" value="{{$edit->address}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Telephone:</label>

                                <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="contact" value="{{$edit->telephone}}">
                                </div> 
                                    <div class="checkbox"> 
                                    </div> 
                                    <input type="submit" class="btn btn-success" value="Update"> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection