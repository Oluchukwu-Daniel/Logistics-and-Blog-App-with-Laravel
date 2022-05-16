@extends('layouts.app')
@section('content')



<!--  breadcrumb start  -->
 <div class="breadcrumb-area service-details-breadcrumb-bg">
  <div class="container">
     <div class="row">
        <div class="col-lg-8">
           <div class="breadcrumb-txt">
              <span>Services</span>

              <div class="quote-sidebar">
                <h3>TRACK PARCEL</h3>
                
                <form action="{{route('trackstatus')}}" method="post" class="quote-form">
                  @csrf
                   <div class="form-element"><input type="text" name="track" placeholder="Input your tracking id"></div>
                   <div class="form-element"><button type="submit">Get Status</button></div>

                   <div class="form-element"><button><a href="/home" style="color:white" style="text-decoration:none">Back to Home</a></button></div>

                   <div class="form-element"><span>{{$status}}</span></div>

                </form>
              </div>
              {{-- <h1>we provide best services</h1> --}}
              {{-- <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                 </ol>
              </nav> --}}
           </div>
        </div>
     </div>
  </div>
  <div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--  service details section start  -->
<div class="service-details-section">
  <div class="container">
     <div class="row">
        <div class="col-xl-7 col-lg-8">
           <div class="service-details-content">
              <div class="img-wrapper"><img src="/assets/img/service_single/description.jpg" alt=""></div>
              <div class="service-details-desc">
                 <h2 class="title">SECURE AND SAFE AIR Freight</h2>
                 <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport & logistics services.</p>
                 <div class="overview">
                    <h3 class="title">Overview</h3>
                    <p>Full Truck Loads by road solutions. We are operate world wide. With some 450.000 shipments a year, Transport is one of the biggest forwarders in Europe and abroad and is particularly active in transport & logistics services.</p>
                    <ul class="overview-points">
                       <li>We provide innovative solutions with the best</li>
                       <li>We offer our clients support in destination marketing</li>
                       <li>promoting unique story each destination</li>
                       <li>Strong partnerships with international agencies</li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
        <!--  sidebar section start  -->
        <div class="col-xl-4 offset-xl-1 col-lg-4">
           <div class="sidebar">
              <div class="category-sidebar">
                 <ul>
                    <li><a href="services.html">Air Freight</a></li>
                    <li><a href="services.html">Road Freight</a></li>
                    <li><a href="services.html">Ocean Freight</a></li>
                    <li><a href="services.html">Warehousing</a></li>
                    <li><a href="services.html">Storage</a></li>
                 </ul>
              </div>
              <div class="quote-sidebar">
                 <h3>REQUEST A QUOTE</h3>
                 <form action="#" class="quote-form">
                    <div class="form-element"><input type="text" name="name" placeholder="Your name"></div>
                    <div class="form-element"><input name="email" type="text" placeholder="Email"></div>
                    <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                    <div class="form-element"><button type="submit"><span>Submit</span></button></div>
                 </form>
              </div>
           </div>
        </div>
        <!--  sidebar section end  -->
     </div>
  </div>
</div>
<!--  service details section end  -->


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


<!--  features section start  -->
<div class="features-section home-2 border-bottom">
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


<!--   partner section start    -->
<div class="partner-section">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="partner-carousel owl-carousel owl-theme">
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="/assets/img/partner-1.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="/assets/img/partner-2.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="/assets/img/partner-3.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="/assets/img/partner-4.png" alt="">
                    </div>
                 </div>
              </div>
              <div class="single-partner-item">
                 <div class="outer">
                    <div class="inner">
                       <img src="/assets/img/partner-5.png" alt="">
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
<!--   partner section end    -->


<!--   footer section start    -->
<footer>
  <div class="container">
     <div class="top-footer">
        <div class="row">
           <div class="col-xl-4 col-lg-4">
              <div class="logo-wrapper"><img src="/assets/img/footer_logo.png" alt=""></div>
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
<script src="/assets/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- owl carousel js -->
<script src="/assets/js/owl.carousel.min.js"></script>
<!-- lightbox js -->
<script src="/assets/js/lightbox.min.js"></script>
<!-- isotope js -->
<script src="/assets/js/isotope.pkgd.min.js"></script>
<!-- slicknav js -->
<script src="/assets/js/jquery.slicknav.min.js"></script>
<!-- wow js -->
<script src="/assets/js/wow.min.js"></script>
<!-- main js -->
<script src="/assets/js/main.js"></script>

@endsection