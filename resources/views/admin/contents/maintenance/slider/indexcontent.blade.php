@extends('admin.index')
@section('indexcontent')   
        
            <div class="row">
                    
                <div class="col-md-12" align="right">
                   <button  data-toggle="modal" data-target="#centralModalSuccess" class="btn btn-wd btn-success btn-fill btn-rotate button">
                    <span class="btn-label">
                     <i class="ti-plus"></i>
                 </span>Add</button>
             </div>
            </div>
                    <div class="row">
                        <div class="col-md-12"><br>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Slider Images</h4>

                                </div>

                              <div class="card-content table-responsive table-full-width">
                                    <table class="table table-striped table-hover" style="text-align: center;">
                                        <thead >
                                            <tr>
                                                <th style="text-align: center;"> Image</th>
                                                <th style="text-align: center;"> Description</th>
                                                <th style="text-align: center;">Status</th>
                                                <th style="text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($page_data['data'] as $key=> $value)
                                            <tr>
                                                <td >
                                                     <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;width: 100px;" src="{{asset('includes/admin/slider/'.$value->slider_img)}}">
                                                </td>
                                                 <td>
                                                     {{$value->slider_desc}}
                                                </td>
                                                <td>
                                                    @if($value->status == 1)
                                                    <p class="text-success"> Active</p>
                                                    @else
                                                    <p class="text-warning"> Inctive</p>
                                                    @endif
                                                </td>
                                                <td > <button  data-toggle="modal" data-target="#{{$value->id}}" class="btn btn-wd btn-primary btn-fill btn-rotate button">
                                                   
                                                <span class="btn-label">
                                                   <i class="ti-pencil-alt"></i>
                                                </span>Edit</button>
                                                </td>
                                                @include('admin.contents.maintenance.modals.editslider')
                                            </tr>
                                         @endforeach
                                          
                                        </tbody>
                                    </table>
                                    <div class="text-center"> {!! $page_data['data']->render() !!} </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>



@include('admin.contents.maintenance.modals.addslider')

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