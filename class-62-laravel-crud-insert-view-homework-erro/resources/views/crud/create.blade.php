@extends('layout.master')

@section('content')
 
    <div class="row">
         
            <div class="col-md-3" style=" text-align: center; background-color: skyblue; padding-left: 10px;">
                <h3>Dashboard</h3>
                <h3>Dashboard</h3>
                <h3>Dashboard</h3>

                <h3>Dashboard</h3>
                <h3>Dashboard</h3>

                <h3>Dashboard</h3>
                <h3>Dashboard</h3>
                <h3>Dashboard</h3>

            </div>
     <div class="col-md-9" style="float: right;">
        <div class="panel panel-primary">
           <div class="panel-heading">
               <div style="overflow: hidden">
                   <div class="col-md-6"><span class='glyphicon glyphicon-flash'></span> Requisition Management</div>
                   <div class="col-md-6 text-right"><a href=" "><span class='glyphicon glyphicon-user'></span>   </a></div>
                </div>
           </div>
           <div class="panel-body">
            <form class="form-horizontal" action="{{route('insertValue')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="student_name"> Add Product</label>
                    <div class="col-sm-6">
                        <select name="add_product" class="form-control">
                            <option value="">Add Product</option>
                            <option value="1">Shirt</option>
                            <option value="2">Arts</option>
                        </select>
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('add_product'))
                            <div class="alert alert-danger">{{$errors->first('add_product')}}</div>
                            @endif
                     </div>   
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="student_name">Invoice:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="student_name" placeholder=" " name="invoice">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('invoice'))
                            <div class="alert alert-danger">{{$errors->first('invoice')}}</div>
                            @endif
                     </div>   
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="student_email">Requisition Qty:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="student_email" placeholder=" " name="requisition_qty">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('requisition_qty'))
                            <div class="alert alert-danger">{{$errors->first('requisition_qty')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Price: </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="password" placeholder=" " name="price">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('price'))
                            <div class="alert alert-danger">{{$errors->first('price')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="confirmed">Description:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="confirmed" placeholder=" " name="description">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('description'))
                            <div class="alert alert-danger">{{$errors->first('description')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="dob">Vat</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="dob" placeholder=" " name="vat">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('vat'))
                            <div class="alert alert-danger">{{$errors->first('vat')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone">Tax:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone" placeholder=" " name="tax">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('tax'))
                            <div class="alert alert-danger">{{$errors->first('tax')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="photo">AIT:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="photo" placeholder=" " name="ait">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('ait'))
                            <div class="alert alert-danger">{{$errors->first('ait')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="biodata">Discount:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="photo" placeholder=" " name="discount">
                         
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('discount'))
                            <div class="alert alert-danger">{{$errors->first('discount')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="biodata_file">Net Payable:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="biodata_file" placeholder=" " name="net_payable">
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('net_payable'))
                            <div class="alert alert-danger">{{$errors->first('net_payable')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Add Supplier:</label>
                    <div class="col-sm-6">
                        <select name="add_supplier" class="form-control">
                            <option value="">Add Supplier</option>
                            <option value="1">Science</option>
                            <option value="2">Arts</option>
                        </select>
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('add_supplier'))
                            <div class="alert alert-danger">{{$errors->first('add_supplier')}}</div>
                            @endif
                     </div> 
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Due:</label>
                    <div class="col-sm-6">
                        <input type="number" name="due">  
                    </div>
                     <div class="col-sm-4">
                            @if($errors->has('due'))
                            <div class="alert alert-danger">{{$errors->first('due')}}</div>
                            @endif
                     </div> 
                </div>

               


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-plus"></span> Submit</button>
                        <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-refresh"></span> Clear</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
    </div>
@endsection