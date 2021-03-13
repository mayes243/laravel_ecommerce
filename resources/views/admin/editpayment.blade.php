@extends('admin.layout.adminheader')
@section('title','Edit Payment')
@section('content-section')
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Payment Form</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                        </div>
                        <div class="form-body" style="background:linear-gradient(rgba(0,0,100,0.2),rgba(0,0,10,0.02)); color:purple; font-family:'',cursive;">

                            @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif

                            <form method="post" action="{{route('updatepayment',$edit->id)}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                <label for="exampleInputEmail1">Payment Method By:</label>

                                 <input type="text" class="form-control" placeholder="Enter Payment Method" name="pmethod" value="{{$edit->payment_method}}">
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1">Payment Status:</label>

                                <input type="text" class="form-control" placeholder="Enter Your Payment Status" name="pstatus" value="{{$edit->payment_status}}">
                                </div> 
                                    <div class="checkbox">  
                                    </div> 
                                    <input type="submit" class="btn btn-success" value="Submit">
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection