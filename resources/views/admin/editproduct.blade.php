@extends('admin.layout.adminheader')
@section('title','Edit Product')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Products</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Product Register Form</h4>
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,90,0.11)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('updateproduct',$edit->id)}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Product Name" name="productname" value="{{$edit->product_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Short Description:</label>
                                <textarea type="text" class="form-control" placeholder="Enter Product Short Description" name="productsd">{{$edit->product_short_description}}</textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Long Description:</label>
                                <textarea type="text" class="form-control" placeholder="Enter product Long Description" name="productld">{{$edit->product_long_description}}</textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Price:</label>
                                <input type="text" class="form-control" placeholder="Enter product Price" name="productpr" value="{{$edit->product_price}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Image:</label>
                                <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Size:</label>
                                <input type="text" class="form-control" placeholder="Enter product Size" name="productsize" value="{{$edit->product_size}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Color:</label>
                                <input type="text" class="form-control" placeholder="Enter product color" name="productcolor" value="{{$edit->product_color}}">
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1">Publication Status:</label>
                                <input type="text" class="form-control" placeholder="Enter Publication Status" name="pstatus" value="{{$edit->publication_status}}">
                                </div>

                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity:</label>
                                <input type="text" class="form-control" placeholder="Enter product Quantity" name="productq" value="{{$edit->product_quantity}}">
                                </div>
                                    <input type="submit" class="btn btn-success" value="Update"> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection