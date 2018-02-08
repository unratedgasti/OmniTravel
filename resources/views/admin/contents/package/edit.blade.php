@extends('admin.edit')
@section('edit')   
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
                                   {!! Form::open(['url' => '/admin/updatepackage/'.$page_data['package']->id,'id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}

                                        <div class="form-group">

                                <div class="col-sm-12">
                                     <fieldset>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                
                                                    <textarea  id="tinytextarea" class="form-control" name="pack_test" placeholder="Package Details" rows="5">{{$page_data['package']->pack_test}}</textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                         <fieldset align="center">
                            <button class="btn btn-wd btn-info btn-fill btn-rotate">
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