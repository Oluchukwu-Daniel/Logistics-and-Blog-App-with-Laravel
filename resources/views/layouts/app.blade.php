
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" >
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Transpix - Transport & Logistic HTML Template</title>
      <!-- favicon -->
      <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <!-- fontawesome css -->
      <link rel="stylesheet" href="/assets/css/flaticon.css">
      <!-- fontawesome css -->
      <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
      <!-- owl carousel css -->
      <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
      <!-- owl carousel theme css -->
      <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
      <!-- lightbox css -->
      <link rel="stylesheet" href="/assets/css/lightbox.min.css">
      <!-- slicknav css -->
      <link rel="stylesheet" href="/assets/css/slicknav.css">
      <!-- animate css -->
      <link rel="stylesheet" href="/assets/css/animate.min.css">
      <!-- main css -->
      <link rel="stylesheet" href="/assets/css/style.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="/assets/css/responsive.css">
      <!-- jquery js -->
      <script src="/assets/js/jquery-3.3.1.min.js"></script>
   </head>


   
  <body>
    <!--   header area start   -->
    <div class="header-area home-2">
        <div class="info-bar">
          <div class="container">
              <div class="row">
                <div class="col-lg-4 col-8">
                    <ul class="social-links">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-4">
                    <div class="right-content">
                      <span class="working-time">Opening Hours : Monday - Saturday 9 am to 5 pm</span>
                      <div class="language">
                          <a href="#" class="dropdown-btn">EN <i class="flaticon-down-arrow"></i></a>
                          <ul class="language-dropdown">
                            <li>
                                <a href="#">English</a>
                            </li>
                            <li>
                                <a href="#">French</a>
                            </li>
                            <li>
                                <a href="#">Spanish</a>
                            </li>
                            <li>
                                <a href="#">Arabic</a>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="support-nav-area">
          <div class="container">
              <div class="support-nav-container">
                <div class="row">
                    <div class="col-lg-3 col-5">
                      <div class="logo-wrapper">
                          <div class="logo-wrapper-inner">
                            <a href="index.html"><img src="/assets/img/logo.png" alt=""></a>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-9 col-7 position-static">
                      <div class="support-bar">
                          <div class="row">
                            <div class="col-lg-12 offset-xl-4 col-xl-10">
                                <div class="row">
                                  <div class="col-lg-3">
                                      <div class="support-info">
                                        <div class="left-content"><i class="flaticon-call"></i></div>
                                        <div class="right-content">
                                            <div class="right-content-inner">
                                              <h5>Free Call</h5>
                                              <p>+ 00 12 123 456</p>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-3">
                                      <div class="support-info">
                                        <div class="left-content"><i class="flaticon-email"></i></div>
                                        <div class="right-content">
                                            <h5>Mail us</h5>
                                            <p>Support@mail.com </p>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="row">
                                        {{-- <div class="col-lg-2"></div> --}}
                                        <div class="col-lg-6">
                                            <a href="/quote" class="boxed-btn"><span>Get a Quote</span></a>
                                        </div>
                                        {{-- <div class="col-lg-1"></div> --}}
                                        <div class="col-lg-6">
                                            <a href="{{route('trackst')}}" class="boxed-btn"><span>Track Parcel</span></a>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <div id="mobileMenuHome2"></div>
                      <ul class="search-cart-area mobile">
                          <li class="search-icon"><a href="#"><i class="flaticon-search"></i></a></li>
                          <li class="shopping-icon">
                            <a href="#"><i class="flaticon-shopping-cart-black-shape"></i></a>
                            <span class="count">0</span>
                          </li>
                      </ul>
                    </div>
                </div>
                <div class="navbar-area">
                    <div class="row">
                      <div class="col-md-9">
                          <nav class="main-menu" id="mainMenuHome2">
                            <ul>
                                <li class="">
                                  <a href="/home">Home</a>
                                  
                                </li>
                                <li>
                                  <a href="about.html">About Us</a>
                                </li>
                                <li >
                                  <a href="/blog">Blog</a>
                                </li>
                                <li>
                                  <a href="/contact">Contact</a>
                                </li>
                                <li>
                                  <a href="/signup">Sign Up</a>
                                </li>
                                <li class="">
                                  <a href="{{route('login')}}">Login</a>
                                </li>
                            </ul>
                          </nav>
                      </div>
                      <div class="col-md-3">
                          <ul class="search-cart-area">
                            <li class="search-icon"><a href=""><i class="flaticon-search"></i></a></li>
                            <li class="shopping-icon">
                                <a href=""><i class="flaticon-shopping-cart-black-shape"></i></a>
                                <span class="count">0</span>
                            </li>
                          </ul>
                      </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!--   header area end   -->


    <!--   search bar popup start   -->
    <div class="search-popup">
        <form class="search-form" action="#">
          <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
        </form>
        <div class="search-popup-overlay" id="searchOverlay"></div>
        <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
    </div>
      <!--   search bar popup end   --> 
    @yield('content')
  </body>
</html>