@extends('admin.layout.adminheader')
@section('title','Update Profile')
@section('content-section')
 <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Profile Picture</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('profilestore',$updateprofile->id)}}" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputFile">File input:</label>
                                <input type="file" name="image" required="">
                                </div>
                                <input type="hidden" name="userid" value="{{Auth::user()->id}}">
                                    <input type="submit" class="btn btn-success" value="Upload">
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection