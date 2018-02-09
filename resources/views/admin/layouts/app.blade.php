
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{get_company_name()}}</title>

    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="{{url('includes/admin/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/backend/assets/css/paper-dashboard.css?v=1.2.1')}}" rel="stylesheet"/>
    <link href="{{url('includes/admin/backend/assets/css/drmt.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/backend/assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{url('includes/admin/backend/assets/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/backend/assets/css/select2-bootstrap.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/backend/assets/css/datepicker.min.css')}}" rel="stylesheet" />   
    <link href="{{url('includes/admin/backend/assets/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" />
    <link href="{{url('includes/admin/backend/assets/css/drmt.css')}}" rel="stylesheet" />
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

<script src="{{url('includes/admin/backend/assets/js/jquery-3.1.1.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery-ui.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/perfect-scrollbar.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.validate.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/es6-promise-auto.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/moment.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-datetimepicker.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-selectpicker.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-switch-tags.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.easypiechart.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/chartist.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-notify.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/sweetalert2.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery-jvectormap.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-table.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.datatables.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/fullcalendar.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/paper-dashboard.js?v=1.2.1')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.sharrre.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/datepicker.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/select2.min.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/bootstrap-datetimepicker.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.datatables.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/jquery.maskMoney.js')}}"></script>

<script src="{{url('includes/admin/backend/assets/js/drmt.js')}}"></script>
<script type="text/javascript">
    $().ready(function(){
        drmt.checkFullPageBackgroundImage();

        setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
    });
</script>

</html>
