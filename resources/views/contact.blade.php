@extends('layouts.app')
@section('content')

      <!--  breadcrumb start  -->
      <div class="breadcrumb-area contact-breadcrumb-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-7">
                 <div class="breadcrumb-txt">
                    <span>Contact</span>
                    <h1>keep in touch with us for help </h1>
                    <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contact</li>
                       </ol>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
        <div class="breadcrumb-overlay"></div>
     </div>
     <!--  breadcrumb end  -->


     <!--   contact section start    -->
     <div class="contact-section">
        <div class="container">
           <!--  contact infos start  -->
           <div class="contact-infos">
              <div class="row no-gutters">
                 <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s">
                       <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                       <div class="info-txt">
                          <p>143 castle road 517</p>
                          <p>district, kiyev port south Canada</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                       <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                       <div class="info-txt">
                          <p>+3 123 456 789</p>
                          <p>+1 222 345 342</p>
                          <p>+2 123 433 324</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 single-info-col">
                    <div class="single-info wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                       <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                       <div class="info-txt">
                          <p>info@yourmail.com</p>
                          <p>transpix@yourmail2.com</p>
                          <p>ship@yourmail3.com</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <!--  contact infos end  -->
           <!--  contact form and map start  -->
           <div class="contact-form-section">
              <div class="row">
                 <div class="col-lg-6">
                    <span class="title">Contact</span>
                    <h2 class="subtitle">KEEP IN TOUCH</h2>
                    <form action="{{route('contact')}}" method="post">
                      @csrf
                        {{$response}}
                       <div class="row">
                          <div class="col-md-6">
                             <div class="form-element"><input type="text" placeholder="Name" name="name"></div>
                             @error('name')
                             <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                            @enderror
                          </div>
                          <div class="col-md-6">
                             <div class="form-element"><input type="text" placeholder="Email" name="email"></div>
                             @error('email')
                             <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                           @enderror
                          </div>
                          <div class="col-md-6">
                             <div class="form-element"><input type="text" placeholder="Phone" name="phone_number"></div>
                             @error('phone_number')
                             <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                           @enderror
                          </div>
                          <div class="col-md-6">
                             <div class="form-element"><input type="text" placeholder="Subject" name="subject"></div>
                             @error('subject')
                             <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                           @enderror
                          </div>
                          <div class="col-md-12">
                             <div class="form-element">
                                <textarea name="comment" cols="30" rows="10" placeholder="Comment" name="comment"></textarea>
                                @error('comment')
                                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                              @enderror
                             </div>
                          </div>
                          <div class="col-md-12">
                             <div class="form-element">
                                <button type="submit"><span>Submit</span></button>
                             </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-element">
                              <a href="/home" style="text-decoration:none"><span>Back to Home</span></a>
                            </div>
                         </div>
                       </div>
                    </form>
                 </div>
                 <div class="col-lg-6">
                    <div class="map-wrapper">
                       <div id="map"></div>
                    </div>
                 </div>
              </div>
           </div>
           <!--  contact form and map end  -->
        </div>
     </div>
     <!--   contact section end    -->


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
     <!-- google map api -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap" async defer></script>
     <!-- google map activate js -->
     <script src="assets/js/google-map-activate.js"></script>
     <!-- main js -->
     <script src="assets/js/main.js"></script>

     @endsection