

<link href="{{url('includes/admin/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('includes/admin/backend/assets/css/mdb.css')}}" rel="stylesheet" />
<link href="{{url('includes/admin/backend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />

<link href="{{url('includes/admin/backend/assets/css/paper-dashboard.css?v=1.2.1')}}" rel="stylesheet"/>
<link href="{{url('includes/admin/backend/assets/css/daniel.css')}}" rel="stylesheet"/>

<link href="{{url('includes/admin/backend/assets/css/drmt.css')}}" rel="stylesheet" />
<link href="{{url('includes/admin/backend/assets/css/themify-icons.css')}}" rel="stylesheet">


<link href="{{url('includes/admin/backend/assets/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{url('includes/admin/backend/assets/css/select2-bootstrap.css')}}" rel="stylesheet" />


<link href="{{url('includes/admin/backend/assets/css/datepicker.min.css')}}" rel="stylesheet" />   


<link href="{{url('includes/admin/backend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{url('includes/admin/backend/assets/css/fonts.css')}}" rel="stylesheet">


<script src="{{url('includes/admin/backend/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('includes/admin/backend/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{url('includes/admin/backend/assets/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{url('includes/admin/backend/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('includes/admin/backend/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
<script src="{{url('includes/admin/backend/assets/js/jasny-bootstrap.min.js')}}" type="text/javascript"></script>


<script>
  tinymce.init({
    selector: 'textarea#tinytextarea', 
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400
  });
</script>
<style type="text/css">
	div.card {
		box-shadow: -10px 8px 25px 0 rgba(0,0,0,0.2);
	}
	.card:hover {
    
	box-shadow: -18px 19px 31px rgba(0, 0, 0, 0.2);
}
.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button {
    position: relative;
    border: none;
    color: #FFFFFF;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
</style>