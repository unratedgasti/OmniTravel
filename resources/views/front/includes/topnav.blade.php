
<div class="header-w3layouts"> 
  <!-- Navigation -->
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Tourism</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div> 
    <div class="logo-agile-1"> 
      <h1><a class="logo" href="{{url('/')}}"><i class="fa fa-plane" aria-hidden="true"></i>Tourism</a></h1>
    </div> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="@if($page_data['active'] == 'dashboard') active @endif"><a href="{{url('/')}}">Home</a></li>
        <li class="@if($page_data['active'] == 'package') active @endif"><a  href="{{url('/packages')}}">Packages</a></li>
        <li class="@if($page_data['active'] == 'gallery') active @endif"><a  href="{{url('/gallery')}}">Gallery</a></li>
        <li class="@if($page_data['active'] == 'contactus') active @endif"><a  href="{{url('/contactus')}}">Contact Us</a></li>
      </ul>
      <div class="w3ls-social-icons-2">
        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
        <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
      </div>
    </div>
    <!-- //navbar-collapse -->
  </nav>  
  <div class="clearfix"> </div>
</div>  