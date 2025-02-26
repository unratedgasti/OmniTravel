@extends('front.index')
@section('indexcontent')   
 @include('front.contents.contactus.banner')<!-- contact -->
<section class="contact-w3ls">
  <div class="container">
    <h3 class="agile-title">Contact Us</h3>
    <div class="w3layouts_header">
      <p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
      <div class="contact-agileits">
        <h4>Get In Touch</h4>
        <form action="#" method="post">
          <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label> 
                            <input type="text" class="form-control" name="name" id="name" Placeholder=" " required="">
                            <p class="help-block"></p>
                        </div>
                    </div>  
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" Placeholder=" " required="">
              <p class="help-block"></p>
            </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" Placeholder=" " required="">
              <p class="help-block"></p>
            </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button> 
        </form>            
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
      <h4 class="w3l-contact">Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone :</strong> +1 (100)222-23-33</p>
      <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">info@example.com</a></p>
      <p class="contact-agile1"><strong>Address :</strong> Interstate 81 SB, Williamsport, WV 25419, USA.</p>                     
      <div class="social-bnr-agileits footer-icons-agileinfo">
        <ul class="social-icons3">
          <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
          <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
          <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
          <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<!-- map -->
<div class="w3l-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>
</div>
<!-- //map -->
<!-- //contact -->
  @stop