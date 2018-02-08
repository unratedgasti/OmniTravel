<!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="csrf-token" content="{!! csrf_token() !!}">

        <meta name="author" content="">

        

        <title>Omni Travel</title>
        <script type="text/javascript">
        
        </script>

    @include('front.includes.header')

	</head>



    <body class="login">
       
       @yield('indexcontent')

     @include('front.includes.footer')


    </body>
    <script type="text/javascript" src="{!! asset('includes/front/js/move-top.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/easing.js') !!}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>

    <script type="text/javascript" src="{!! asset('includes/front/js/SmoothScroll.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/easyResponsiveTabs.js') !!}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>

   
      <script>
              $(function() {
                $( "#datepicker,#datepicker1" ).datepicker();
              });
      </script>
   
    <script type="text/javascript" src="{!! asset('includes/front/js/numscroller-1.0.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/SmoothScroll.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/jquery.film_roll.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/index.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('includes/front/js/controls.js') !!}"></script>
  
    <script type="text/javascript" src="{!! asset('includes/front/js/jquery.chocolat.js') !!}"></script>
        <script type="text/javascript">
            $(function() {
                $('.filtr-item a').Chocolat();
            });
        </script>
@yield('scripts')

</html>