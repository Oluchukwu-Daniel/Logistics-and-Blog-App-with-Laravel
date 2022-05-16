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
  
		<div class="hero-area hero-bg-2 home-2">
			<div class="container">
				<div class="row">
						<div class="col-xl-6 col-lg-8">
							<div class="hero-txt">
									{{-- <span class="wow fadeInDown" data-wow-duration="1.5s">We are transpix</span> --}}
										<div class="request-form">
											<form action="{{route('blogstore')}}" method="post" enctype="multipart/form-data">
                        @csrf
												<div class="row">
													{{-- <div class="col-md-6 col-lg-12">
															<div class="form-element col-lg-8"><input name="name" type="text" placeholder="name"></div>
													</div> --}}
													
													<div class="col-md-6 col-lg-12">
															<div class="form-element col-lg-8"><input name="title" type="text" placeholder="title"></div>
															@error('title')
															<div class="">{{$message}}</div>
													 		@enderror
													</div>
													
													<div class="col-md-6 col-lg-12">
														<div class="form-element col-lg-8">
															<div class="select-wrapper">
																	<select name="author">
																		<option value="" selected disabled>Select Author</option>
																		<option value="Admin">Admin</option>
																	</select>
															</div>
															@error('author')
															<div class="">{{$message}}</div>
													 		@enderror
														</div>
													</div>
                          <div class="col-md-6 col-lg-12">
                            <div class="form-element col-lg-8">
															Upload Image:
															<input name="file_path" type="file" placeholder="upload image" >
														</div>
														@error('file_path')
														<div class="">{{$message}}</div>
												 		@enderror
                        	</div>
                          <div class="col-md-12 col-lg-12">
                            <div class="form-element col-lg-8">
                               <textarea name="content1" cols="30" rows="10" placeholder="content1"></textarea>
                            </div>
														@error('content1')
														<div class="">{{$message}}</div>
												 		@enderror
                        	</div>
													<div class="col-md-12 col-lg-12">
                            <div class="form-element col-lg-8">
                               <textarea name="content2" cols="30" rows="10" placeholder="content2"></textarea>
                            </div>
														@error('content2')
														<div class="">{{$message}}</div>
												 		@enderror
                        	</div>
													<div class="col-md-12 col-lg-12">
														<div class="form-element col-lg-8">
															<textarea name="quote" cols="30" rows="10" placeholder="quote"></textarea>
														</div>
														@error('quote')
														<div class="">{{$message}}</div>
														@enderror
											 		</div>
                        	<div class="col-md-6 col-lg-12">
                            <div class="row">
                              <div class="col-lg-3 ">
                                <div class="form-element mb-0 col-lg-8"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
                              </div>
                            </div>
                          </div> 
												</div>
											</form>
										</div>
							</div>
						</div>
				</div>
			</div>
		</div>

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