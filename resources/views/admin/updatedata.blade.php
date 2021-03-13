@extends('admin.layout.adminheader')
@section('title','Update Data')
@section('content-section')
       <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Admin Update Forms</h2>
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

                            <form method="post" action="{{route('updateadmin',$editdata->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>

                                @if($errors->has('fname'))
                                <span style="color:red;"><strong>{{$errors->first('fname')}}</strong></span>
                                @endif

                                 <input type="text" class="form-control" placeholder="Enter Your First Name" name="fname" value="{{$editdata->first_name}}">
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Middle Name" name="mname" value="{{$editdata->middle_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>

                                @if($errors->has('lname'))
                                <span style="color:red;"><strong>{{$errors->first('lname')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" value="{{$editdata->last_name}}">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> User Name:</label>

                                @if($errors->has('username'))
                                <span style="color:red;"><strong>{{$errors->first('username')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Your Last Name" name="username" value="{{$editdata->username}}">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1"> Email:</label>

                                @if($errors->has('email'))
                                <span style="color:red;"><strong>{{$errors->first('email')}}</strong></span>
                                @endif

                                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" value="{{$editdata->email}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Address:</label>


                                @if($errors->has('address'))
                                <span style="color:red;"><strong>{{$errors->first('address')}}</strong></span>
                                @endif

                                 <input type="Address" class="form-control" placeholder="Enter Your Address" name="address" value="{{$editdata->address}}">
                                </div>
                                @if(Auth::user()->role=='super')
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Admin Type:</label>
                                <select name="role" class="form-control">
                                    <option value="" style="display: none;">Choose Role</option>
                                    <option value="super">Super</option>
                                    <option value="editor">Editor</option>
                                </select>
                                </div>
                                @endif
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Contact:</label>

                                @if($errors->has('contact'))
                                <span style="color:red;"><strong>{{$errors->first('contact')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="contact" value="{{$editdata->contact}}">
                                </div>
                                <div class="form-group">
                                Gender:
                                @if($editdata->gender=='male')
                                <input type="radio" name="gender" value="male" checked="">Male
                                <input type="radio" name="gender" value="female">Female
                                @endif
                                @if($editdata->gender=='female')
                                <input type="radio" name="gender" value="male" >Male
                                <input type="radio" name="gender" value="female" checked="">Female
                                @endif

                                @if($errors->has('gender'))
                                <span style="color:red;"><strong>{{$errors->first('gender')}}</strong></span>
                                @endif
                                </div>
                                <div class="form-group">
                                <label for="exampleInputFile">File input:</label> 

                                @if($errors->has('image'))
                                <span style="color:red;"><strong>{{$errors->first('image')}}</strong></span>
                                @endif

                                <input type="file" name="image">
                                </div>
                                    <input type="submit" class="btn btn-success" value="Update">
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection