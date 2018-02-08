@extends('admin.index')
@section('indexcontent') 

		<div class="row">
			@foreach($page_data['package'] as $key=> $value)
			<div class="col-lg-3 col-sm-6"  id="test">
				<div class="card card-circle-chart  {{$value->id}}" id="{{$value->id}}"  data-background-color="" >
					<div class="card-header text-center">
						<h5 class="card-title">Package</h5>
						
						<p class="description">Add Package</p>
					</div>
					<div class="card-content">
						<div id="chartNewVisitors" class="chart-circle" data-percent="62">{!!$value->pack_test!!}<canvas height="160" width="160"></canvas></div>
						       <a href="{{url('admin/editpackage/'.$value->id)}}" class="btn btn-wd btn-primary btn-fill btn-rotate">
                                                <span class="btn-label">
                                                   <i class="ti-pencil-alt"></i>
                                                </span>Edit</a>
					</div>
				</div>
			</div>	
                                           
            @endforeach
            <div class="col-lg-3 col-sm-6">
				<div class="card card-circle-chart " data-background-color="brown">
					<div class="card-header text-center">
						<h5 class="card-title"></h5>
						<a href="{{url('admin/addpackage')}}" class="description">Add Package</a>
					</div>
					<div class="card-content">
						<a href="{{url('admin/addpackage')}}" id="chartNewVisitors" class="chart-circle btn-rotate" data-percent="62">
							<i class="fa fa-plus-circle" style="font-size: 150px;color: white"></i><canvas height="160" width="160"></canvas></a>

					</div>
				</div>
			</div>	
	
			
		</div>
	<div class="text-center"> {!! $page_data['package']->render() !!} </div>
	<input type="hidden" id="count" value="{{count($page_data['package'])}}">
	     @section('scripts')
    
        <script type="text/javascript">
      $('#test').ready(function(){
      		 
        					var count = $('#count').val() + 1;
        		console.log(count);
        		for (i = 1; i < count; i++) {
        			if(i == 1 || i == 4 || i == 7 || i == 10 || i == 13){
        				$('#'+i).attr('data-background-color','blue');
        			}else if(i == 2 || i == 5 || i == 8 || i == 11 || i == 14 ){
        				$('#'+i).attr('data-background-color','green');
        			}else{
        				$('#'+i).attr('data-background-color','orange');
        			}
        		}
        			
      });
          
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