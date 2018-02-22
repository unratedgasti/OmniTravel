@extends('admin.add')
@section('add')   
                     <div class="row">       
                   <div class="col-md-12" align="left">
                       
                        <a href="{{url('/admin/package')}}"  class="btn btn-wd btn-default btn-fill btn-move-left">
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
                              {!! Form::open(['url' => '/admin/addpackage','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}
                              <fieldset>
                                <div class="form-group {{$errors->first('prod_image') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Image Package</label>
                                  <div class="col-sm-5">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail">
                                        <img src="{{asset('includes/admin/images/noimg.jpg')}}" alt="...">
                                      </div>
                                      <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                      <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                          <span class="fileinput-new">Select image</span>
                                          <span class="fileinput-exists">Change</span>
                                          <input type="hidden"><input type="file" name="pack_img">
                                        </span>

                                      </div>
                                      <span style="color: red">{{ $errors->first('prod_image') ?: '' }}</span>
                                    </div>  
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group  {{$errors->first('pack_name') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Package Name</label>
                                  <div class="col-sm-10">
                                    <input type="text" placeholder="Package Name"  name="pack_name" class="form-control" >
                                    <span style="color: red">{{ $errors->first('pack_name') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group {{$errors->first('pack_price') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Package Price</label>
                                  <div class="col-sm-3">
                                    <div class="input-group ">
                                      <span class="input-group-addon">₱</span>
                                      <input type="text" class="form-control"   name="pack_price">

                                    </div>
                                    <span style="color: red">{{ $errors->first('pack_price') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group  {{$errors->first('start_date') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Start Date</label>
                                  <div class="col-sm-10">
                                    <input type="text" placeholder="Start Date"name="start_date" class="form-control datepicker" >
                                    <span style="color: red">{{ $errors->first('start_date') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group  {{$errors->first('end_date') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">End Date</label>
                                  <div class="col-sm-10">
                                    <input type="text" placeholder="End Date"  name="end_date" class="form-control datepicker" >
                                    <span style="color: red">{{ $errors->first('end_date') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label">Package Status</label>
                                  <div class="col-sm-10">
                                    <input type="checkbox" name="pack_status" class="switch-plain"  checked >
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group  {{$errors->first('pack_inclusion') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Package Inclusion</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" name="pack_inclusion" placeholder="Package Inclusion" rows="5"></textarea>
                                    <span style="color: red">{{ $errors->first('pack_inclusion') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="form-group  {{$errors->first('pack_desc') ? 'has-error' : '' }}">
                                  <label class="col-sm-2 control-label">Package Description</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" name="pack_desc" placeholder="Package Description" rows="5"></textarea>
                                    <span style="color: red">{{ $errors->first('pack_desc') ?: '' }}</span>
                                  </div>
                                </div>
                              </fieldset>

                              <div class="form-group">

                                <div class="col-sm-12">
                                 <fieldset>
                                  <div class="form-group">
                                    <div class="col-sm-12">

                                      <textarea  id="tinytextarea" class="form-control" name="pack_test" placeholder="Package Details" rows="5"></textarea>
                                    </div>
                                  </div>
                                </fieldset>
                                <fieldset align="center">
                                  <button class="btn btn-wd btn-info btn-fill btn-rotate button">
                                    <span class="btn-label">
                                     <i class="ti-save"> </i>
                                   </span>Save</button>
                                 </fieldset>
                               </div>
                             </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
      $('.datepicker').datetimepicker({
            format: 'MM/DD/YYYY',    //use this format if you want the 12hours timpiecker with AM/PM toggle
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
         });
  });
</script>
@endsection

@endsection