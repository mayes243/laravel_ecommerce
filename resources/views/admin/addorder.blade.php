@extends('admin.layout.adminheader')
@section('title','Add Order')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Products</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Order Register Form</h4>
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,90,0.11)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('addorder')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputEmail1">Total Order:</label>

                                @if($errors->has('torder'))
                                <span style="color:red;"><strong>{{$errors->first('torder')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter total order" name="torder">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Order Status:</label>

                                @if($errors->has('ostatus'))
                                <span style="color:red;"><strong>{{$errors->first('ostatus')}}</strong></span>
                                @endif

                                <input type="text" class="form-control" placeholder="Enter order status" name="ostatus">
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