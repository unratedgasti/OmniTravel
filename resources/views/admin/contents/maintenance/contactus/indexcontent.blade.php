@extends('admin.index')
@section('indexcontent')
        <div class="row">       
                  
                   <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                        </div>
                        <div class="card-content">
                           {!! Form::open(['url' => '/admin/maintenance/','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal']) !!}
                              <fieldset>
                                <div class="form-group ">
                                  <label class="col-sm-2 control-label">Company Address</label>
                                  <div class="col-sm-10">
                                    <input type="text" placeholder="Company Address"  name="comp_add" class="form-control" value="{{$page_data['address']->content_desc}}">
                                  </div>
                                </div>
                              </fieldset>
                             
                        <fieldset>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" placeholder="Address" name="content_name" class="form-control" value="contactus">
                                    <textarea  id="tinytextarea" class="form-control" name="content_desc" placeholder="About Us" rows="5">{{$page_data['data']->content_desc}}</textarea>
                                </div>
                            </div>
                        </fieldset>
                         
                        <fieldset align="center">
                            <button class="btn btn-wd btn-info btn-fill btn-rotate button">
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