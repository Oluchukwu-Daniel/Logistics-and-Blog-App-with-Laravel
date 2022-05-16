@extends('layouts.app')
@section('content')

 <!--  breadcrumb start  -->
 <div class="breadcrumb-area about-breadcrumb-bg">
  <div class="container">
     <div class="row">
        <div class="col-lg-7">
           <div class="breadcrumb-txt">
              <span>about us</span>
              <h1>we are transpot service provider</h1>
              <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                 </ol>
              </nav>
           </div>
        </div>
     </div>
  </div>
  <div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--  about section start  -->
<div class="about-section about">
  <div class="container">
     <div class="row">
        <div class="col-xl-5 col-lg-6">
           <div class="outer">
              <div class="inner">
                 <div class="about-txt">
                    <span class="title">about us</span>
                    <h2 class="subtitle">WE ARE TRANSPIX</h2>
                    <p>We offers a host of logistic management services and supply chain solutions. We provide innovative solutions with the best.  Incididunt dolor sit amet, consectetur adipiscing elit, sed dolore magna.  </p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <img src="assets/img/signature-2.png" alt="">
                    <h5>DAVID ANDERSON</h5>
                    <span>Founder & CEO</span>
                 </div>
              </div>
           </div>
        </div>
        <div class="col-xl-6 offset-xl-1 col-lg-6">
           <div class="about-right-bg">
           </div>
        </div>
     </div>
     <div class="targets">
        <div class="row">
           <div class="col-lg-6">
              <div class="box wow fadeInUp" data-wow-duration="1s">
                 <div class="icon-wrapper"><i class="flaticon-external-link-square-with-an-arrow-in-right-diagonal"></i></div>
                 <div class="box-details">
                    <h4>Our mission</h4>
                    <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                 </div>
              </div>
           </div>
           <div class="col-lg-6">
              <div class="box wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                 <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                 <div class="box-details">
                    <h4>Our Vision</h4>
                    <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--  about section end  -->


<!--  features section start  -->
<div class="features-section home-2 border-top">
  <div class="container">
     <div class="row feature-content">
        <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
           <div class="features">
              <span class="title">Features</span>
              <h2 class="subtitle">WHY CHOOSE US</h2>
              <div class="feature-lists">
                 <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                    <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                    <div class="feature-details">
                       <h4>24/7 support</h4>
                       <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                    </div>
                 </div>
                 <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                    <div class="feature-details">
                       <h4>On time delivery</h4>
                       <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                    </div>
                 </div>
                 <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="icon-wrapper"><i class="flaticon-worldwide"></i></div>
                    <div class="feature-details">
                       <h4>global service</h4>
                       <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--  features section end  -->


<!--   quote section start    -->
<div class="quote-section quote-bg">
  <div class="container">
     <div class="row">
        <div class="offset-lg-5 col-lg-7">
           <div class="quote-form-section">
              <span class="title">Quote</span>
              <h2 class="subtitle">Request a free qoute</h2>
              <form action="#">
                 <div class="row">
                    <div class="col-lg-6">
                       <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-element">
                          <div class="select-wrapper">
                             <select name="freight">
                                <option value="" selected disabled>Select a Freight</option>
                                <option value="">Air Freight</option>
                                <option value="">Ocean Freight</option>
                                <option value="">Road Freight</option>
                             </select>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                    </div>
                    <div class="col-lg-12">
                       <div class="form-element mb-0"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
                    </div>
                 </div>
              </form>
           </div>
        </div>
     </div>
  </div>
</div>
<!--   quote section end    -->


<!--  service section start  -->
<div class="service-section">
  <div class="container">
     <span class="title">Our Services</span>
     <h2 class="subtitle">WHAT WE PROVIDE</h2>
     <div class="service-carousel owl-carousel owl-theme">
        <div class="single-service">
           <div class="img-wrapper">
              <img src="assets/img/services/service_1.jpg" alt="">
           </div>
           <div class="service-txt">
              <h4 class="service-title">Air Freight</h4>
              <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
              <a href="service-details.html" class="readmore">Read More</a>
           </div>
        </div>
        <div class="single-service">
           <div class="img-wrapper">
              <img src="assets/img/services/service_2.jpg" alt="">
           </div>
           <div class="service-txt">
              <h4 class="service-title">Road Freight</h4>
              <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
              <a href="service-details.html" class="readmore">Read More</a>
           </div>
        </div>
        <div class="single-service">
           <div class="img-wrapper">
              <img src="assets/img/services/service_3.jpg" alt="">
           </div>
           <div class="service-txt">
              <h4 class="service-title">Ocean Freight</h4>
              <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
              <a href="service-details.html" class="readmore">Read More</a>
           </div>
        </div>
        <div class="single-service">
           <div class="img-wrapper">
              <img src="assets/img/services/service_4.jpg" alt="">
           </div>
           <div class="service-txt">
              <h4 class="service-title">Air Freight</h4>
              <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
              <a href="service-details.html" class="readmore">Read More</a>
           </div>
        </div>
     </div>
  </div>
</div>
<!--  service section end  -->  


<!--   partner section start    -->
<div class="partner-section">
  <div class="container border-top">
     <div class="row">
        <div class="col-md-12">
           <div class="partner-carousel owl-carousel owl-theme">
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="assets/img/partner-1.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="assets/img/partner-2.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="assets/img/partner-3.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="assets/img/partner-4.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="assets/img/partner-5.png" alt="">
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--   partner section end    -->


<!--   cta section start    -->
<div class="cta-section cta-bg">
  <div class="container">
     <div class="cta-container">
        <div class="row align-items-center">
           <div class="col-lg-9">
              <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
           </div>
           <div class="col-lg-3 text-center text-lg-right">
              <a href="contact.html" class="boxed-btn"><span>Contact Us</span></a>
           </div>
        </div>
     </div>
  </div>
  <div class="cta-overlay"></div>
</div>
<!--   cta section end    -->


<!--   footer section start    -->
<footer>
  <div class="container">
     <div class="top-footer">
        <div class="row">
           <div class="col-xl-4 col-lg-4">
              <div class="logo-wrapper"><img src="assets/img/footer_logo.png" alt=""></div>
              <p>Transgo shipping offers a host of logistic management services and supply chain & provide innovative solutions with the best. </p>
           </div>
           <div class="offset-xl-1 col-xl-2 col-lg-2">
              <h4>Useful Links</h4>
              <ul class="userful-links">
                 <li><a href="index.html">Home</a></li>
                 <li><a href="about.html">About us</a></li>
                 <li><a href="services.html">Service</a></li>
                 <li><a href="blogs.html">Blog</a></li>
                 <li><a href="contact.html">Contact</a></li>
              </ul>
           </div>
           <div class="col-xl-2 col-lg-2">
              <h4>Services</h4>
              <ul class="userful-links">
                 <li><a href="#">Air Freight</a></li>
                 <li><a href="#">OCEAN Freight</a></li>
                 <li><a href="#">WAREHOUSING</a></li>
                 <li><a href="#">STORAGE</a></li>
                 <li><a href="#">ROAD Freight</a></li>
              </ul>
           </div>
           <div class="col-xl-3 col-lg-4">
              <h4>Contact Us</h4>
              <div class="footer-contact">
                 <div class="contact-info">
                    <div class="icon-wrapper"><i class="flaticon-placeholder"></i></div>
                    <p>143 castle road 517 district, kiyev port south Canada</p>
                 </div>
                 <div class="contact-info">
                    <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                    <p>+00 12 123 4567</p>
                 </div>
                 <div class="contact-info">
                    <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                    <p>Info@yourmail.com</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="bottom-footer">
        <p class="text-center">© Copyrights 2019 Transpix. All rights reserved.</p>
     </div>
  </div>
</footer>
<!--   footer section end    -->


<!-- preloader section start -->
<div class="loader-container">
  <span class="loader">
  <span class="loader-inner"></span>
  </span>
</div>
<!-- preloader section end -->


<!-- back to top area start -->
<div class="back-to-top">
  <i class="fas fa-chevron-up"></i>
</div>
<!-- back to top area end -->


<!-- popper js -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- isotope js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- slicknav js -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>