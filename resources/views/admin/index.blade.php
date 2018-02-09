<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ucfirst($page_data['page_name'])}}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('admin.includes.header')
</head>
<body class="sidebar-mini">

    <div class="wrapper">

       @include('admin.includes.sidebar') 
       
       

       <div class="main-panel">
         
         @include('admin.includes.topnav')   


         <div class="content">
            <div class="container-fluid">
              <div class="main_container">
               @yield('indexcontent')

               
           </div>
       </div>

       

   </div>


   @include('admin.includes.footer')   
</div>

</body>


<script src="{{url('includes/admin/backend/assets/js/jquery.validate.min.js')}}"></script>


<script src="{{url('includes/admin/backend/assets/js/es6-promise-auto.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/moment.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-datetimepicker.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-selectpicker.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-switch-tags.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.easypiechart.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-notify.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/sweetalert2.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery-jvectormap.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.bootstrap.wizard.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-table.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.datatables.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/fullcalendar.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/paper-dashboard.js?v=1.2.1')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.sharrre.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/drmt.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/datepicker.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/select2.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.datatables.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.maskMoney.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault(); 
            event.stopPropagation(); 
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
        
    });
</script>

@yield('scripts')  

<style type="text/css">

.marginBottom-0 {margin-bottom:0;}

.dropdown-submenu{position:relative;}
.dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover>a:after{border-left-color:#555;}
.dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}


</style>

</html>
