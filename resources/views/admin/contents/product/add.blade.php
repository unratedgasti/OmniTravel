@extends('admin.edit')
@section('edit')   
        <style type="text/css">
        textarea::-webkit-input-placeholder , input::-webkit-input-placeholder { /* WebKit browsers */
            color:    #787878 !important;
        }
        textarea:-moz-placeholder , input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color:    #787878 !important;
        }
        textarea::-moz-placeholder , input::-moz-placeholder { /* Mozilla Firefox 19+ */
            color:    #787878 !important;
        }
        textarea:-ms-input-placeholder , input:-ms-input-placeholder { /* Internet Explorer 10+ */
            color:    #787878 !important;
        }
        </style>
                  <div class="row">       
                   <div class="col-md-12" align="left">
                       
                        <a href="{{url('/admin/products')}}"  class="btn btn-wd btn-default btn-fill btn-move-left">
                                                <span class="btn-label">
                                                    <i class="ti-angle-left"></i>
                                                </span>
                                                Back To List
                                            </a>
                         <div class="clearfix"><br></div>
                   </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Elements</h4>
                                </div>
                                <div class="card-content">
                                {!! Form::open(['url' => '/admin/addproduct','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}
                     
                                        <fieldset>
                                            <div class="form-group  {{$errors->first('prod_name') ? 'has-error' : '' }}">
                                                <label class="col-sm-2 control-label">Product Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="Product Name" value="{{old('prod_name')}}" name="prod_name" class="form-control" >
                                                    <span style="color: red">{{ $errors->first('prod_name') ?: '' }}</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>
                                            <div class="form-group {{$errors->first('prod_price') ? 'has-error' : '' }}">
                                                <label class="col-sm-2 control-label">Product Price</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group ">
                                                        <span class="input-group-addon">₱</span>
                                                        <input type="text" class="form-control" value="{{old('prod_price')}}"  name="prod_price">
                                                           
                                                    </div>
                                                    <span style="color: red">{{ $errors->first('prod_price') ?: '' }}</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Quantity</label>
                                                <div class="col-sm-5">
                                                    <input type="text" placeholder="Product Quantity" name="prod_quantity" class="form-control" >
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>     
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Image</label>
                                                <div class="col-sm-10">
                                                <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;width: 100px;" src="{{asset('includes/admin/products/noimg.jpg')}}">
                                                  
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>
                                            <div class="form-group {{$errors->first('prod_image') ? 'has-error' : '' }}">
                                                <label class="col-sm-2 control-label"></label>
                                                <div class="col-sm-5">
                                                  <input type="file" name="prod_image" class="form-control">
                                                   <span style="color: red">{{ $errors->first('prod_image') ?: '' }}</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Status</label>
                                                <div class="col-sm-10">
                                                  <input type="checkbox" name="prod_status" class="switch-plain" checked>
                                                </div>
                                            </div>
                                        </fieldset>

                                            <fieldset>
                                            <div class="form-group  {{$errors->first('prod_description') ? 'has-error' : '' }}">
                                                <label class="col-sm-2 control-label">Product Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="prod_description" placeholder="Product Description" rows="5">{!!old('prod_description')!!}</textarea>
                                                     <span style="color: red">{{ $errors->first('prod_description') ?: '' }}</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                       <fieldset align="center">
                                            <button class="btn btn-wd btn-info btn-fill btn-rotate">
                                                <span class="btn-label">
                                                   <i class="ti-save"> </i>
                                                </span>    Save</button>
                                       </fieldset>
                                  {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>



@endsection