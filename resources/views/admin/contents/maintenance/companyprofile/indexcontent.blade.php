@extends('admin.index')
@section('indexcontent')
        <div class="row">       
             
                   <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                        </div>
                        <div class="card-content">
                           {!! Form::open(['url' => '/admin/maintenance/','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}

                           <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Name</label>
                                <div class="col-sm-8">
                                    <input type="hidden" placeholder="" name="content_name" class="form-control" value="companyname">
                                    <input type="text" placeholder="Company Name" name="companyname" class="form-control" value="{{$page_data['companyname']->content_desc}}">
                                </div>
                               </div>
                           </fieldset>
                           <fieldset>     
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Logo</label>
                                <div class="col-sm-10">
                                 <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail">
                                      @if($page_data['companylogo']->content_desc)
                                   <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="{{asset('includes/admin/images/'.$page_data['companylogo']->content_desc)}}">
                                   @else
                                   <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="{{asset('includes/admin/images/noimg.jpg')}}">

                                   @endif
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                  <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                      <span class="fileinput-new">Select image</span>
                                      <span class="fileinput-exists">Change</span>
                                      <input type="hidden"><input type="file" name="companylogo">
                                    </span>
                                    
                                  </div>
                                </div>
                                 

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