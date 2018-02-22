@extends('admin.index')
@section('indexcontent') 

		<div class="row">
			@foreach($page_data['package'] as $key=> $value)
			<div class="col-lg-3 col-sm-6"  id="test" >
				<div class="card card-circle-chart  {{$value->id}}" id="{{$value->id}}"  data-background-color="{{$value->pack_status == 1 ? 'greeny' : 'orangey'}}" >
					<div class="card-header text-center" >
						<img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" class="myDiv" src="{{asset('includes/admin/packages/'.$value->pack_img)}}">
						<h5 class="card-title"><strong  style="color: white;font-size: 24px"><br>{{$value->pack_name}}</strong></h5>
						@if((date('M Y',strtotime($value->start_date)) == date('M Y',strtotime($value->end_date)))  )
							@if(date('d',strtotime($value->start_date)) <= date('d',strtotime($value->end_date)))
								<p class="description" style="color: white">{{ date('F',strtotime($value->start_date))}}  {{ date('d',strtotime($value->start_date))}} - {{date('d',strtotime($value->end_date))}} {{date('Y',strtotime($value->start_date))}}</p>
							@else
								<p class="description" style="color: white">{{ date('F',strtotime($value->start_date))}}  {{ date('d',strtotime($value->end_date))}} - {{date('d',strtotime($value->start_date))}} {{date('Y',strtotime($value->start_date))}}</p>
							@endif

						@else
						<p class="description" style="color: white">{{ date('F d, Y',strtotime($value->start_date))}} - {{date('F d, Y',strtotime($value->end_date))}}</p>
						@endif			
						
					</div>
					<div class="card-content" style="color: white">
						<div id="chartNewVisitors"  >{!!nl2br($value->pack_inclusion)!!} 
						<p>{!!nl2br($value->pack_desc)!!} </p></div>
						<p>
							@if($value->pack_status == 1)
								<span style="color: #ffee58 ">Active</span>
							@else
								<span>Inactive</span>
							@endif
						</p>
						      <a href="{{url('admin/editpackage/'.$value->id)}}" class="btn btn-wd btn-primary btn-fill btn-rotate button">
                                                <span class="btn-label">
                                                   <i class="ti-pencil-alt"></i>
                                                </span>Edit</a>
					</div>
				</div>
			</div>	
                                           
            @endforeach
            <div class="col-lg-3 col-sm-6">
				<div class="card card-circle-chart " data-background-color="dark" >
					<div class="card-header text-center">
						<h5 class="card-title"></h5>
						<a href="{{url('admin/addpackage')}}" class="description" style="color: white">Add Package</a>
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
/*      $('#test').ready(function(){
      		 
        					var count = $('#count').val() + 1;
        		console.log(count);
        		for (i = 1; i < count; i++) {
        			if(i == 1 || i == 4 || i == 7 || i == 10 || i == 13){
        				$('#'+i).attr('data-background-color','green');
        			}else if(i == 2 || i == 5 || i == 8 || i == 11 || i == 14 ){
        				$('#'+i).attr('data-background-color','green');
        			}else{
        				$('#'+i).attr('data-background-color','green');
        			}
        		}
        			
      });*/
          
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