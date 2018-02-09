
    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header" style="vertical-align: middle;">
                    <p class="heading lead" style="font-size: 24px;vertical-align: middle;">Change Password</p>
    
                </div>
              <div class="modal-body">
               {!! Form::open(['url' => '/admin/changepassword/','id'=>'changepass','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}
               
               <fieldset>
               <div class="form-group  {{$errors->first('cpass') ? 'has-error' : '' }}">
                  <label class="col-sm-4 control-label">Current Password</label>
                  <div class="col-sm-8">
                   <input type="password" name="cpass" class="form-control">
                     <span style="color: red">{{ $errors->first('cpass') ?: '' }}</span>
                  </div>
                </div>
              </fieldset>
               <fieldset>
                <div class="form-group  {{$errors->first('password') ? 'has-error' : '' }}">
                  <label class="col-sm-4 control-label">New Password</label>
                  <div class="col-sm-8">
                   <input type="password" name="password" class="form-control">
                     <span style="color: red">{{ $errors->first('password') ?: '' }}</span>
                  </div>
                </div>
              </fieldset>
               <fieldset>
               <div class="form-group  {{$errors->first('password_confirmation') ? 'has-error' : '' }}">
                  <label class="col-sm-4 control-label">Retype New Password</label>
                  <div class="col-sm-8">
                   <input type="password" name="password_confirmation" class="form-control">
                     <span style="color: red">{{ $errors->first('password_confirmation') ?: '' }}</span>
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
    <script type="text/javascript">
         
          @if(count($errors) > 0)
            @if($errors->has('cpass') || $errors->has('password') || $errors->has('password_confirmation'))
            $('#changePassword').modal('show');
            @endif
          @endif
        </script>
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
