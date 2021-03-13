@extends('admin.layout.adminheader')
@section('title','Edit Manufacture')
@section('content-section')
<!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1" style="color:skyblue;">Add Manufacture</h2>
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

                            <form method="post" action="{{route('updatemanufacture',$edit->id)}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputEmail1">Manufacture Name:</label>
                                 <input type="text" class="form-control" placeholder="Enter Manufacture Name" name="manufacturename" value="{{$edit->manufacture_name}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Manufacture Description:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Manufacture Description" name="manufacturedesc" value="{{$edit->manufacture_description}}">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Publication Status:</label>
                                <input type="text" class="form-control" placeholder="Enter Publication Status" name="pstatus" value="{{$edit->publication_status}}">
                                </div> 
                                    <input type="submit" class="btn btn-success" value="Update">
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection