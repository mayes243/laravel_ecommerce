@extends('admin.layout.adminheader')
@section('title','Add items')
@section('content-section')
<div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Item Form</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('additem')}}" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">Item Name:</label>

                                @if($errors->has('itemname'))
                                <span style="color:red;"><strong>{{$errors->first('itemname')}}</strong></span>
                                @endif
                              

                                 <input type="text" class="form-control" placeholder="Enter Your item Name" name="itemname">
                                </div>
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Item Price:</label>

                                @if($errors->has('itemprice'))
                                <span style="color:red;"><strong>{{$errors->first('itemprice')}}</strong></span>
                                @endif
                              

                                 <input type="text" class="form-control" placeholder="Enter Your item model" name="itemprice">
                                </div>
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Item Model:</label>

                                @if($errors->has('itemmodel'))
                                <span style="color:red;"><strong>{{$errors->first('itemmodel')}}</strong></span>
                                @endif
                              

                                 <input type="text" class="form-control" placeholder="Enter Your item model" name="itemmodel">
                                </div>
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Item Size:</label>

                                @if($errors->has('itemsize'))
                                <span style="color:red;"><strong>{{$errors->first('itemsize')}}</strong></span>
                                @endif
                                 <input type="text" class="form-control" placeholder="Enter Your item size" name="itemsize">
                                </div>
                                Items Type (male or female):
                                 <input type="radio" placeholder="Enter Your item type male/female" name="itemtype" value="Male">Male |
                                 <input type="radio" placeholder="Enter Your item type male/female" name="itemtype" value="Female">Female |
                                 <input type="radio" placeholder="Enter Your item type male/female" name="itemtype" value="Both Male and Female">Both Male and Female
                                 <br><br>
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Item's Short description:</label>

                                @if($errors->has('itemshort'))
                                <span style="color:red;"><strong>{{$errors->first('itemshort')}}</strong></span>
                                @endif
                                 <textarea type="text" class="form-control" placeholder="Enter Your short description" name="itemshort"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Item's Long description:</label>

                                @if($errors->has('itemlong'))
                                <span style="color:red;"><strong>{{$errors->first('itemlong')}}</strong></span>
                                @endif
                                 <textarea type="text" class="form-control" placeholder="Enter Your long description" name="itemlong"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputFile">Item Image:</label> 

                                @if($errors->has('image'))
                                <span style="color:red;"><strong>{{$errors->first('image')}}</strong></span>
                                @endif

                                <input type="file" name="image" multiple="true">
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