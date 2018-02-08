
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{get_company_name()}} Login</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


   <link href="{{url('includes/admin/paper-pro/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{url('includes/admin/paper-pro/assets/css/paper-dashboard.css?v=1.2.1')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/demo.css')}}" rel="stylesheet" />
      <link href="{{url('includes/admin/paper-pro/assets/css/themify-icons.css')}}" rel="stylesheet">

     <!--  Select2 CSS     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/paper-pro/assets/css/select2-bootstrap.css')}}" rel="stylesheet" />


    <!--  Datepicker CSS     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/datepicker.min.css')}}" rel="stylesheet" />   

    <!--  Datetimepicker CSS     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  
                <a class="navbar-brand" href="{{url('/admin/login')}}"> {{get_company_name()}}</a>
            </div>
          
        </div>
    </nav>
 @yield('content')
</body>

    <script src="{{url('includes/admin/paper-pro/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{url('includes/admin/paper-pro/assets/js/jquery-ui.min.js')}}"></script>

        <script src="{{url('includes/admin/paper-pro/assets/js/perfect-scrollbar.min.js')}}"></script>
         <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap.min.js')}}"></script>
   <!--  Forms Validations Plugin -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.validate.min.js')}}"></script>

    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="{{url('includes/admin/paper-pro/assets/js/es6-promise-auto.min.js')}}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{url('includes/admin/paper-pro/assets/js/moment.min.js')}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-datetimepicker.js')}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-selectpicker.js')}}"></script>

    <!--  Switch and Tags Input Plugins -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-switch-tags.js')}}"></script>

    <!-- Circle Percentage-chart -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.easypiechart.min.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{url('includes/admin/paper-pro/assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-notify.js')}}"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{url('includes/admin/paper-pro/assets/js/sweetalert2.js')}}"></script>

    <!-- Vector Map plugin -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery-jvectormap.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> --}}

    <!-- Wizard Plugin    -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-table.js')}}"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.datatables.js')}}"></script>

    <!--  Full Calendar Plugin    -->
    <script src="{{url('includes/admin/paper-pro/assets/js/fullcalendar.min.js')}}"></script>

    <!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
    <script src="{{url('includes/admin/paper-pro/assets/js/paper-dashboard.js?v=1.2.1')}}"></script>
    
    <!--   Sharrre Library    -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.sharrre.js')}}"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="{{url('includes/admin/paper-pro/assets/js/demo.js')}}"></script>


    <!--  Datepicker JS     -->
    <script src="{{url('includes/admin/paper-pro/assets/js/datepicker.min.js')}}"></script>

    <!--  Select2 JS     -->
    <script src="{{url('includes/admin/paper-pro/assets/js/select2.min.js')}}"></script>

    <!--  Datetimepicker JS     -->
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap-datetimepicker.js')}}"></script>

    <!--  Datatables JS     -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.datatables.js')}}"></script>

    <!--  maskMoney JS     -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery.maskMoney.js')}}"></script>

    <script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

</html>
