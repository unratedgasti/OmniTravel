@extends('front.index')
@section('indexcontent')   
 @include('front.contents.gallery.banner')
<!-- gallery -->
<div class="portfolio">
  <div class="container">
    <h3 class="agile-title">Gallery</h3> 
    <div class="w3layouts_header">
      <p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
    </div>
    <ul class="simplefilter">
      <li class="active" data-filter="all">All</li>
      <li data-filter="1">Category 1</li>
      <li data-filter="2">Category 2</li>
      <li data-filter="3">Category 3</li>
      <li data-filter="4">Category 4</li>
    </ul>
    <div class="filtr-container">
      <div class="  filtr-item gallery-t" data-category="1, 3" data-sort="Busy streets">
        <a href="includes/front/images/g1.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g1.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="2" data-sort="Luminous night">
         <a href="includes/front/images/g2.jpg" class="b-link-stripe b-animate-go  thickbox">
        <figure class="w3ls-gallery">
          <img src="includes/front/images/g2.jpg" class="img-responsive" alt=" " />  
          <figcaption class="w3layouts-caption">
            <h3>Tourism</h3>
          </figcaption>
        </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="1, 3" data-sort="City wonders">
        <a href="includes/front/images/g3.jpg" class="b-link-stripe b-animate-go  thickbox">
        <figure class="w3ls-gallery">
          <img src="includes/front/images/g3.jpg" class="img-responsive" alt=" " />  
          <figcaption class="w3layouts-caption">
            <h3>Tourism</h3>
          </figcaption>
        </figure>
        </a>
      </div>
      <div class="  filtr-item" data-category="3" data-sort="In production">
         <a href="includes/front/images/g4.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g4.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="3, 2" data-sort="Industrial site">
        <a href="includes/front/images/g5.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g5.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="2, 3" data-sort="Peaceful lake">
        <a href="includes/front/images/g6.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g6.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="  filtr-item" data-category="1, 3" data-sort="City lights">
         <a href="includes/front/images/g7.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g7.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="2, 2" data-sort="Dreamhouse">
         <a href="includes/front/images/g8.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g8.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
              <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class=" filtr-item" data-category="4" data-sort="Dreamhouse">
        <a href="includes/front/images/g9.jpg" class="b-link-stripe b-animate-go  thickbox">
          <figure class="w3ls-gallery">
            <img src="includes/front/images/g9.jpg" class="img-responsive" alt=" " />  
            <figcaption class="w3layouts-caption">
                <h3>Tourism</h3>
            </figcaption>
          </figure>
        </a>
      </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //gallery -->

@section('scripts')
    <script type="text/javascript" src="{!! asset('includes/front/js/jquery.filterizr.js') !!}"></script>
     <script type="text/javascript">
            $(function() {
                $('.filtr-container').filterizr();
            });
        </script>
@endsection
  @stop