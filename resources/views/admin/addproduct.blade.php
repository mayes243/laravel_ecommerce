@extends('admin.layout.adminheader')
@section('title','Add Product')
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

                            <form method="post" action="{{route('storeproduct')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Name:</label>

                                @if($errors->has('productname'))
                                <span style="color:red;"><strong>{{$errors->first('productname')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Product Name" name="productname">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Short Description:</label>

                                @if($errors->has('productsd'))
                                <span style="color:red;"><strong>{{$errors->first('productsd')}}</strong></span>
                                @endif

                                <textarea type="text" class="form-control" placeholder="Enter Product Short Description" name="productsd"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Long Description:</label>

                                @if($errors->has('productld'))
                                <span style="color:red;"><strong>{{$errors->first('productld')}}</strong></span>
                                @endif

                                <textarea type="text" class="form-control" placeholder="Enter product Long Description" name="productld"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Price:</label>

                                @if($errors->has('productpr'))
                                <span style="color:red;"><strong>{{$errors->first('productpr')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter product Price" name="productpr">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Image:</label>

                                @if($errors->has('image'))
                                <span style="color:red;"><strong>{{$errors->first('image')}}</strong></span>
                                @endif

                                <input type="file" class="form-control" name="image">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Size:</label>

                                @if($errors->has('productsize'))
                                <span style="color:red;"><strong>{{$errors->first('productsize')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter product Size" name="productsize">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Color:</label>

                                @if($errors->has('productcolor'))
                                <span style="color:red;"><strong>{{$errors->first('productcolor')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter product color" name="productcolor">
                                </div>
                                <div class="form-group">
                                    <label>Manufacture</label>
                                    <select name="manufacture" class="form-control">
                                        <option>Choose Manufacture.....</option>
                                        @foreach($show as $s)
                                    <option value="{{$s->id}}">{{$s->manufacture_name}}</option>
                                    @endforeach
                                    </select>
                                    
                                </div>
                                <div class="form-group"> 
                                <label for="exampleInputEmail1">Publication Status:</label>

                                @if($errors->has('pstatus'))
                                <span style="color:red;"><strong>{{$errors->first('pstatus')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter Publication Status" name="pstatus">
                                </div>

                                <div class="form-group">
                                <label for="exampleInputEmail1">Product Quantity:</label>

                                @if($errors->has('productq'))
                                <span style="color:red;"><strong>{{$errors->first('productq')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter product Quantity" name="productq">
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