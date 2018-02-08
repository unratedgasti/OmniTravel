
    <!-- Bootstrap core CSS     -->
    <link href="{{url('includes/admin/paper-pro/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{url('includes/admin/paper-pro/assets/css/mdb.css')}}" rel="stylesheet" />
  <link href="{{url('includes/admin/paper-pro/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
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

    <!--  Fonts and icons     -->
    {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
    {{-- <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'> --}}
    <link href="{{url('includes/admin/paper-pro/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('includes/admin/paper-pro/assets/css/fonts.css')}}" rel="stylesheet">
  

    <!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('includes/admin/paper-pro/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{url('includes/admin/paper-pro/assets/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{url('includes/admin/paper-pro/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('includes/admin/paper-pro/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript"></script>


   <script>
    tinymce.init({
  selector: 'textarea#tinytextarea',  // change this value according to your HTML
  plugin: 'a_tinymce_plugin',
  a_plugin_option: true,
  a_configuration_option: 400
});
  </script>