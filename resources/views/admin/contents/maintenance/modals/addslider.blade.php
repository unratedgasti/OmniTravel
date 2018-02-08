<!-- Modal -->
   <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-full-height modal-left" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              <div class="modal-header">
              </div>

              <!--Body-->
              <div class="modal-body">
               {!! Form::open(['url' => '/admin/maintenanceslider/','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}

               <fieldset>

                    <input type="hidden" name="action" value="add">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider Image</label>
                  <div class="col-sm-9">
                   <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <img src="{{asset('includes/admin/images/noimg.jpg')}}" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                    <div>
                      <span class="btn btn-rose btn-round btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="hidden"><input type="file" name="slider_img">
                      </span>
                      
                    </div>
                  </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider Status</label>
                  <div class="col-sm-9">
                    <input type="checkbox" name="status" class="switch-plain" checked>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider Description</label>
                  <div class="col-sm-9">  
                    <textarea class="form-control" placeholder="Slider Description" name="slider_desc" rows="3"></textarea>
                  </div>
                </div>
              </fieldset>
            </div>
    
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                     <button class="btn btn-wd btn-info btn-fill btn-rotate">
                                                <span class="btn-label">
                                                   <i class="ti-save"> </i>
                                                </span>Save</button>
                    <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>