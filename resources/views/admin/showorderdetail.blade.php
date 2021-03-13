@extends('admin.layout.adminheader')
@section('title','Order details')
@section('content-section')
<div id="page-wrapper">
            <div class="mainpage">
                <div class="tables">
                    <h2 class="title1"></h2>
                    <div class="bs-example widget-shadow" data-example-id="contextual-table"> 
                        <h4 style="font-family:'',cursive;">Order information</h4>
                        @if(Session::has('msg'))
                            <div id="message" class="alert alert-success">
                                {{Session::get('msg')}}
                            </div>
                            @endif
                        <table class="table" style="right:0px;background-color:skyblue; width:100%;">
                            {{@csrf_field()}}
                         <tr>
                         <th>Sn</th>
                         <th>Total Order</th>
                         <th >Customer Name</th>
                         <th >Customer Address</th>
                         <th>Product Name</th>
                         <th>Product Price</th>
                         <th>Product Sales Quantity</th>
                         <th colspan="2">Action</th>
                        </tr>
                        <?php $i=1 ?>
                        @foreach($s as $t)
                         <tr class="danger">
                            <td>{{$i++}}</td>
                            <td>{{$t->orderdetail->order_total}} Items</td>
                            <td>{{$t->tblc->first_name}}-{{$t->tblc->last_name}}</td>
                            <td>{{$t->tblc->address}}</td>
                            <td>{{$t->pro->product_name}}</td>
                            <td>{{$t->pro->product_price}}</td>
                            <td>{{$t->pro->product_quantity}}</td>
                            <td>
                                <a href="" onclick="return confirm('Are You Sure Want To Edit All ??')"><span class="btn btn-primary"><i class="fa fa-edit"> Edit </i></span></a>
                            </td>
                            <td>
                            <a href="" onclick="return confirm('Are You Sure Want To Delete All Manufacture data ??')"><span class="btn btn-danger"><i class="fa fa-close"></i> Delete </span></a></td>
                         </tr>
                         @endforeach
                         </table>
                        </div>
                    </div>
                </div>
            </div>
    @endsection