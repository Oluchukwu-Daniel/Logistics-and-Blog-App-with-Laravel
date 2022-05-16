@extends('layouts.app')
@section('content')


      <!--  hero area start  -->
      <div class="hero-area hero-bg-2 home-2">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-8">
                  <div class="hero-txt">
                     <span class="wow fadeInDown" data-wow-duration="1.5s">We are transpix</span>
                     <h1 class="wow fadeInUp" data-wow-duration="1.5s">No# 1 solution for transport</h1>
                     <a href="services.html" class="wow fadeInUp boxed-btn" data-wow-duration="1.5s" href="services.html"><span>SEE SERVICES</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="request-section">
            <div class="container">
               <div class="request-section-container">
                  <div class="row">
                     <div class="col-xl-5 col-lg-6">
                        <span class="title">Quote</span>
                        <h2 class="subtitle">Request a free qoute</h2>
                        <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                     </div>
                     <div class="offset-xl-1 col-xl-6 col-lg-6">
                        <div class="request-form">
                           <form action="/quote" method="post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-element">
                                       <input name="weight" type="text" placeholder="Weight of Item(Kg)" class=" @error('weight') border border-danger @enderror">
                                        @error('weight')
                                          <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element">
                                       <div class="select-wrapper">
                                          <select name="freight_type">
                                             <option value="" selected disabled>Select a Freight</option>
                                             <option value="air">Air Freight</option>
                                             <option value="ocean">Ocean Freight</option>
                                             <option value="road">Road Freight</option>
                                          </select>
                                          @error('freight_type')
                                             <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element">
                                       <input name="pick_up" type="text" placeholder="Pick_up location" class=" @error('pick_up') border border-danger @enderror">
                                       @error('pick_up')
                                          <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element">
                                       <input name="drop_off" type="text" placeholder="Drop_off Location" class=" @error('drop_off') border border-danger @enderror">
                                       @error('drop_off')
                                          <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element">
                                       <input name="distance" type="text" placeholder="Distance(Km)" class=" @error('distance') border border-danger @enderror">
                                       @error('distance')
                                          <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                                       @enderror
                                    </div>
                                 </div>
                                 {{-- <div class="col-md-6">
                                    <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                                 </div> --}}
                                 <div class="col-lg-12">
                                    <div class="form-element mb-0">
                                       <button type="submit" class="boxed-btn"><span>Estimate</span></button>
                                       
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="request-section-overlay"></div>
         </div>
         <div class="hero-overlay"></div>
      </div>
      <!--  hero area end  -->


      <!--  service section start  -->
      <div class="service-section home-2">
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
                     <a href="" class="readmore">Read More</a>
                  </div>
               </div>
               <div class="single-service">
                  <div class="img-wrapper">
                     <img src="assets/img/services/service_3.jpg" alt="">
                  </div>
                  <div class="service-txt">
                     <h4 class="service-title">Ocean Freight</h4>
                     <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                     <a href="" class="readmore">Read More</a>
                  </div>
               </div>
               <div class="single-service">
                  <div class="img-wrapper">
                     <img src="assets/img/services/service_4.jpg" alt="">
                  </div>
                  <div class="service-txt">
                     <h4 class="service-title">Warhousing</h4>
                     <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                     <a href="" class="readmore">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  service section end  -->


      <!--  about section start  -->
      <div class="about-section home-2">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <img class="ceo-pic" src="assets/img/ceo.png" alt="">
               </div>
               <div class="col-lg-6 offset-lg-1">
                  <div class="comment-content">
                     <span class="title">About Us</span>
                     <h2 class="subtitle">WE ARE TRANSFIX</h2>
                     <p>We offers a host of logistic management services and supply chain solutions. We provide innovative solutions with the best.  Incididunt dolor sit amet, consectetur adipiscing elit, sed dolore magna. </p>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                     <div class="ceo-details">
                        <img src="assets/img/signature-2.png" alt="">
                        <h5>DAVID ANDERSON</h5>
                        <span>Founder & CEO</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  about section end  -->


      <!--  features section start  -->
      <div class="features-section home-2 border-top border-top-lg-0">
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


      <!--   faq section start    -->
      <div class="faq-section">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-7">
                  <div class="targets home-2">
                     <div class="box wow fadeInUp" data-wow-duration="1.5s">
                        <div class="icon-wrapper"><i class="flaticon-external-link-square-with-an-arrow-in-right-diagonal"></i></div>
                        <div class="box-details">
                           <h4>Our mission</h4>
                           <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>
                     </div>
                     <div class="box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                        <div class="box-details">
                           <h4>Our Vision</h4>
                           <p>We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offset-xl-1 col-xl-5 col-lg-5">
                  <span class="title">FAQS</span>
                  <h2 class="subtitle">FREQUENTLY ASKED QUESTIONS</h2>
                  <div class="accordion" id="accordionExample">
                     <div class="card wow fadeInUp" data-wow-duration="1s">
                        <div class="card-header" id="headingOne">
                           <h2 class="mb-0">
                              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Why choose this?                         
                              </button>
                           </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                           <div class="card-body">
                              They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions 
                           </div>
                        </div>
                     </div>
                     <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="card-header" id="headingTwo">
                           <h2 class="mb-0">
                              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Is it costly?
                              </button>
                           </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                           <div class="card-body">
                              They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions 
                           </div>
                        </div>
                     </div>
                     <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="card-header" id="headingThree">
                           <h2 class="mb-0">
                              <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              When usally product reach
                              </button>
                           </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                           <div class="card-body">
                              They offers a host of logistic management services and supply chain . We provide innovative solutions with the best.  tempor incididunt ut labore et dolor  empor tempor incididunt innovative solutions
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   faq section end    -->


      <!--   testimonial section start    -->
      <div class="testimonial-section home-2 testimonial-bg-2">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="testimonial-box">
                     <span class="title">Testimonial</span>
                     <h2 class="subtitle">WHAT THEY SAY</h2>
                     <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="single-testimonial">
                           <p>They offers a host of logistic management services and supply chain . We provide innovative solutions with the best. </p>
                           <h5>Jonathon doe</h5>
                           <span>Directer, art media</span>
                        </div>
                        <div class="single-testimonial">
                           <p>They offers a host of logistic management services and supply chain . We provide innovative solutions with the best. </p>
                           <h5>Jonathon doe</h5>
                           <span>Directer, art media</span>
                        </div>
                        <div class="single-testimonial">
                           <p>They offers a host of logistic management services and supply chain . We provide innovative solutions with the best. </p>
                           <h5>Jonathon doe</h5>
                           <span>Directer, art media</span>
                        </div>
                     </div>
                     <img src="assets/img/home_2/double-quote.png" alt="">
                  </div>
               </div>
               <div class="testimonial-overlay"></div>
            </div>
         </div>
      </div>
      <!--   testimonial section end    -->


      <!--   news section start    -->
      <div class="news-section">
         <div class="container">
            <span class="title">Latest blog</span>
            <h2 class="subtitle">Inside The News</h2>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-news wow fadeInRight" data-wow-duration="1.5s">
                     <img src="assets/img/news-1.jpg" alt="">
                     <div class="news-txt">
                        <span class="date">November 05, 2018  -  BY Admin</span>
                        <a href="blog-details.html" class="title">
                           <h3>Flexible shipping are increasing day by day gradually...</h3>
                        </a>
                        <a class="readmore" href="blog-details.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-news wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".2s">
                     <img src="assets/img/news-2.jpg" alt="">
                     <div class="news-txt">
                        <span class="date">November 05, 2018  -  BY Admin</span>
                        <a href="blog-details.html" class="title">
                           <h3>Big warehouse are most friendly for  new shipping..</h3>
                        </a>
                        <a class="readmore" href="blog-details.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-news wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".4s">
                     <img src="assets/img/news-3.jpg" alt="">
                     <div class="news-txt">
                        <span class="date">November 05, 2018  -  BY Admin</span>
                        <a href="blog-details.html" class="title">
                           <h3>Keep your product in storage for long time...</h3>
                        </a>
                        <a class="readmore" href="blog-details.html">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   news section end    -->


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
@endsection