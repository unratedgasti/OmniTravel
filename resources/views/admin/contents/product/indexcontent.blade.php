@extends('admin.index')
@section('indexcontent')   
        
            <div class="row">
                    
                <div class="col-md-12" align="right">
                   <a href="{{url('/admin/addproduct')}}" class="btn btn-wd btn-success btn-fill btn-rotate">
                    <span class="btn-label">
                     <i class="ti-plus"></i>
                 </span>Add</a>
             </div>
            </div>
                    <div class="row">
                        <div class="col-md-12"><br>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Products</h4>

                                </div>

                              <div class="card-content table-responsive table-full-width">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th> Name</th>
                                                <th> Description</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th > Image</th>
                                                <th >Status</th>
                                                <th style="text-align: center;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($page_data['products'] as $key=> $value)
                                            <tr>
                                                <td>
                                                     {{$value->prod_name}}
                                                </td>
                                                <td>
                                                     {{$value->prod_description}}
                                                </td>
                                                <td>
                                                  ₱   {{number_format($value->prod_price, 2, '.', ',')}}
                                                </td>
                                                <td>
                                                    {{$value->prod_quantity}} pc/s
                                                </td>
                                                <td>
                                                     <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;width: 100px;" src="{{asset('includes/admin/products/'.$value->prod_image)}}">
                                                </td>
                                                <td>
                                                    @if($value->prod_status == 1)
                                                    <p class="text-success"> Active</p>
                                                    @else
                                                    <p class="text-warning"> Inctive</p>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                   <a href="{{url('admin/editproduct/'.$value->prod_id)}}" class="btn btn-wd btn-primary btn-fill btn-rotate">
                                                <span class="btn-label">
                                                   <i class="ti-pencil-alt"></i>
                                                </span>Edit</a>
                                                </td>
                                            </tr>
                                         @endforeach
                                          
                                        </tbody>
                                    </table>
                                    <div class="text-center"> {!! $page_data['products']->render() !!} </div>
                                    
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