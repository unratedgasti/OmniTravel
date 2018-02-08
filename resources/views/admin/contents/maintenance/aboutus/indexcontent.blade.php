@extends('admin.index')
@section('indexcontent')   
        
           <div class="row">       
                   <div class="col-md-12" align="left">
                       
                        <a href="{{url('/admin/dashboard')}}"  class="btn btn-wd btn-default btn-fill btn-move-left">
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
                            <h4 class="card-title">About Us</h4>
                        </div>
                        <div class="card-content">
                           {!! Form::open(['url' => '/admin/maintenance/','id'=>'validatelogin','novalidate'=>"novalidate",'class'=>'form-horizontal','files'=>'true']) !!}

                           <fieldset>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <input type="hidden" placeholder="Address" name="content_name" class="form-control" value="aboutus">
                                     <fieldset>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                
                                                    <textarea  id="tinytextarea" class="form-control" name="aboutus" placeholder="About Us" rows="5">{{$page_data['data']->content_desc}}</textarea>
                                                </div>
                                            </div>
                                        </fieldset>
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



@endsection