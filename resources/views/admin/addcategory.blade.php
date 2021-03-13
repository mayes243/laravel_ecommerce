@extends('admin.layout.adminheader')
@section('title','Add Category')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Register Category</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Category Register Form:</h4>
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('addcategory')}}">
                                {{csrf_field()}}

                                <input type="hidden" name="addedby" value="{{Auth::user()->username}}">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Category Name:</label>

                                @if($errors->has('categoryname'))
                                <span style="color:red;"><strong>{{$errors->first('categoryname')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Category Name" name="categoryname">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Category Description:</label>

                                @if($errors->has('categorydesc'))
                                <span style="color:red;"><strong>{{$errors->first('categorydesc')}}</strong></span>
                                @endif

                                <textarea type="text" class="form-control" placeholder="Enter Category Description" name="categorydesc"></textarea>
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1">Publication Status:</label>

                                @if($errors->has('pstatus'))
                                <span style="color:red;"><strong>{{$errors->first('pstatus')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Publication Status" name="pstatus">
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