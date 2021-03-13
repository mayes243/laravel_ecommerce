@extends('admin.layout.adminheader')
@section('title','Register Manufacture')
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

                            <form method="post" action="{{route('manufactureregister')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="exampleInputEmail1">Manufacture Name:</label>
                                @if($errors->has('manufacturename'))
                                <span style="color:red;"><strong>
                                {{$errors->first('manufacturename')}}</strong></span>
                                @endif
                                 <input type="text" class="form-control" placeholder="Enter Manufacture Name" name="manufacturename">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Manufacture Description:</label>
                                @if($errors->has('manufacturedesc'))
                                <span style="color:red;"><strong>
                                {{$errors->first('manufacturedesc')}}</strong></span>
                                @endif
                                <textarea type="text" class="form-control" placeholder="Enter Your Manufacture Description" name="manufacturedesc"></textarea>
                                </div>
                                <div class="form-group">
                                    Choose Category:<select name="category" class="form-control">
                                        <option>Choose Category......</option>
                                        @foreach($show as $s)
                                        <option value="{{$s->id}}">
                                            {{$s->category_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Publication Status:</label>
                                @if($errors->has('pstatus'))
                                <span style="color:red;"><strong>
                                {{$errors->first('pstatus')}}</strong></span>
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