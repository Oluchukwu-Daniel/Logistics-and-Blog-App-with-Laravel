@extends('layouts.app')
@section('content')

      <!--   search bar popup end   -->   
      
                
      <!--  breadcrumb start  -->
      <div class="breadcrumb-area blog-breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="breadcrumb-txt">
                     <span>Latest Blog</span>
                     <h1>FROM THE LATEST NEWS AND BLOG</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  breadcrumb end  -->
      
      
      <!--    blog lists start   -->
      <div class="news-section blog-grid-sidebar">
         <div class="container">
            <div class="row">
               <div class="col-xl-7 col-lg-8">
                  <div class="row">
                     
                     @foreach($blogs as $blog)
                        
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s">
                           <img src="/storage/{{$blog['file_path']}}" alt=""/>

                           <div class="news-txt">
                              <span class="date">{{$blog['created_at']}}  -  BY {{$blog['author']}}</span>
                              <a href="/blogdetails/{{$blog['id']}}" class="title">
                                 <h3>{{$blog['title']}}</h3>
                              </a>
                              <a class="readmore" href="/blogdetails/{{$blog['id']}}">Read More</a>
                           </div>
                        </div>
                     </div>
                     @endforeach
                    
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
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
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s">
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
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                           <img src="assets/img/news-4.jpg" alt="">
                           <div class="news-txt">
                              <span class="date">November 05, 2018  -  BY Admin</span>
                              <a href="blog-details.html" class="title">
                                 <h3>The top logistics trends that will impact...</h3>
                              </a>
                              <a class="readmore" href="blog-details.html">Read More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s">
                           <img src="assets/img/news-5.jpg" alt="">
                           <div class="news-txt">
                              <span class="date">November 05, 2018  -  BY Admin</span>
                              <a href="blog-details.html" class="title">
                                 <h3>These 5 top logistics trends are a response...</h3>
                              </a>
                              <a class="readmore" href="blog-details.html">Read More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                           <img src="assets/img/news-6.jpg" alt="">
                           <div class="news-txt">
                              <span class="date">November 05, 2018  -  BY Admin</span>
                              <a href="blog-details.html" class="title">
                                 <h3>6 more logistics technology trends enabling success...</h3>
                              </a>
                              <a class="readmore" href="blog-details.html">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <nav class="pagination-nav">
                           <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                 <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                 <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <!--    blog sidebar section start   -->
               <div class="col-xl-4 offset-xl-1 col-lg-4">
                  <div class="sidebar">
                     <div class="blog-sidebar-widgets">
                        <div class="searchbar-form-section">
                           <form action="blogs.html">
                              <div class="searchbar">
                                 <input name="term" type="text" placeholder="Search">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="blog-sidebar-widgets post-widget">
                        <div class="popular-posts-lists">
                           <h4>Popular Posts</h4>
                           <div class="single-popular-post">
                              <div class="popular-post-img-wrapper">
                                 <img src="assets/img/blog/blog_sidebar_1.jpg" alt="">
                              </div>
                              <div class="popular-post-txt">
                                 <h5 class="popular-post-title"><a href="blog-details.html">Make a great business community...</a></h5>
                                 <small class="time">2 days ago</small>
                              </div>
                           </div>
                           <div class="single-popular-post">
                              <div class="popular-post-img-wrapper">
                                 <img src="assets/img/blog/blog_sidebar_2.jpg" alt="">
                              </div>
                              <div class="popular-post-txt">
                                 <h5 class="popular-post-title"><a href="blog-details.html">Glorius business career
                                    for you... </a>
                                 </h5>
                                 <small class="time">2 days ago</small>
                              </div>
                           </div>
                           <div class="single-popular-post">
                              <div class="popular-post-img-wrapper">
                                 <img src="assets/img/blog/blog_sidebar_3.jpg" alt="">
                              </div>
                              <div class="popular-post-txt">
                                 <h5 class="popular-post-title"><a href="blog-details.html">Make big shipping industries as business...</a></h5>
                                 <small class="time">2 days ago</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="blog-sidebar-widgets category-widget">
                        <div class="category-lists">
                           <h4>Categories</h4>
                           <ul>
                              <li class="single-category"><a href="blogs.html">Cargo</a></li>
                              <li class="single-category"><a href="blogs.html">Delivery service</a></li>
                              <li class="single-category"><a href="blogs.html">Freight</a></li>
                              <li class="single-category"><a href="blogs.html">Logistic</a></li>
                              <li class="single-category"><a href="blogs.html">Shipping</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="subscribe-section">
                        <span>SUBSCRIBE</span>
                        <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                        <form class="subscribe-form" action="blogs.html">
                           <div class="form-element"><input type="email" placeholder="Email"></div>
                           <div class="form-element"><button type="submit"><span>Subscribe</span></button></div>
                        </form>
                     </div>
                  </div>
               </div>
               <!--    blog sidebar section end   -->
            </div>
         </div>
      </div>
      <!--    blog lists end   -->
      
      
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
@endsection