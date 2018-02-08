@extends('admin.edit')
@section('edit')   
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
                                   {!! Form::open(['url' => '/admin/updateproduct/'.$page_data['product']->prod_id,'id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Name</label>
                                                <div class="col-sm-5">
                                                    <input type="text" placeholder="Product Name" name="prod_name" class="form-control" value="{{$page_data['product']->prod_name}}">
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Price</label>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">₱</span>
                                                        <input type="text" class="form-control" value="{{number_format($page_data['product']->prod_price, 2, '.', ',')}}" name="prod_price">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                         <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Quantity</label>
                                                <div class="col-sm-5">
                                                    <input type="text" placeholder="Product Quantity" name="prod_quantity" class="form-control" value="{{$page_data['product']->prod_quantity}}">
                                                </div>
                                            </div>
                                        </fieldset>
                                          <fieldset>     
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Image</label>
                                                <div class="col-sm-10">
                                                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail">
                                                     @if($page_data['product']->prod_image)
                                                  <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="{{asset('includes/admin/products/'.$page_data['product']->prod_image)}}">
                                                 @else
                                                  <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="{{asset('includes/admin/products/noimg.jpg')}}">
                                               
                                                 @endif
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                                    <div>
                                                      <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="hidden"><input type="file" name="prod_images">
                                                      </span>
                                                      
                                                    </div>
                                                  </div>
                                                
                                                  
                                                </div>
                                            </div>
                                        </fieldset>
                                    
                                          <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Status</label>
                                                <div class="col-sm-10">
                                                  <input type="checkbox" name="prod_status" class="switch-plain" @if($page_data['product']->prod_status) checked @endif>
                                                </div>
                                            </div>
                                        </fieldset>

                                            <fieldset>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Product Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="prod_description" placeholder="Product Description" rows="5">{{$page_data['product']->prod_description}}</textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                       <fieldset align="center">
                                            <button class="btn btn-wd btn-info btn-fill btn-rotate">
                                                <span class="btn-label">
                                                   <i class="ti-save"> </i>
                                                </span>Save</button>
                                       </fieldset>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

    @section('scripts')
    
        <script type="text/javascript">
          
          @if(session()->has('sesmsg'))
          $.notify({   
            message:  "<img src='{{asset('includes/up.png')}}' width='100'>  &nbsp;&nbsp;&nbsp;<strong>{!! session('sesmsg')['msg'] !!}</strong>"
            },{   
            type: 'success'
        });
          @endif

        </script>

    @endsection

@endsection