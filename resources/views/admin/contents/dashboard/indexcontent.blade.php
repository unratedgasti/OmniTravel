@extends('admin.index')
@section('indexcontent')   
        
                    <div class="row">
                        <div class="col-md-12"><br>
                            <div class="card card-calendar">
                                <div class="card-content">
                                    <div id="fullCalendar"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

    @section('scripts')
    
        <script type="text/javascript">
        $(document).ready(function(){
           demo.initFullCalendar();
        });
    </script>

    @endsection

@endsection