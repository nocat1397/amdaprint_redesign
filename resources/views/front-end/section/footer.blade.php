<!-- footer_section - start
		================================================== -->
		<footer class="footer_section bg_gray deco_wrap clearfix">
			<div class="container pt-0">

				<div class="footer_widget_area clearfix">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<div class="widget footer_contact_info clearfix">
									<h3 class="footer_widget_title text-secondary">Get in Touch</h3>
									<ul class="ul_li_block clearfix">
										<li>
											<div class="item_icon">
												<i class="far fa-phone"></i>
											</div>
											<div class="item_content" style="text-align:left!important">
												<p>800-580-4489</p>
												<p>Need to talk? We're here 24x7</p>
											</div>
										</li>

										<li>
											<div class="item_icon">
												<i class="far fa-envelope-open"></i>
											</div>
											<div class="item_content" style="text-align:left!important">
												<p>Write to us</p>
												<p>For more questions, we're just an email away.</p>
											</div>
										</li>

										<li>
											<div class="item_icon">
												<i class="far fa-question-circle" aria-hidden="true"></i>
											</div>
											<div class="item_content" style="text-align:left!important">
												<p>Need help?</p>
												<p>Find your answers.</p>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Category</h3>
								<ul class="ul_li_block clearfix">
									@foreach ($categories as $key=>$category)
									<li><a href="/product/{{strtolower($category->name)}}">{{str_replace('-',' ',$category->name)}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Information</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="/my-orders">Order Tracking</a></li>
									{{-- <li><a href="/privacy-policy">International Shipping</a></li> --}}
									<li><a href="/faq">Customer Reviews</a></li>
									<li><a href="/faq">Special Offers</a></li>
									<li><a href="/faq">Sitemap</a></li>
									<li><a href="/faq">Blog</a></li>
									{{-- <li><a href="/faq">Safety Signs & Banners</a></li> --}}
									
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Customer Service</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="/terms-and-condition">Message from CEO</a></li>
									<li><a href="/privacy-policy">About Us</a></li>
									<li><a href="/faq">Contact us</a></li>
									<li><a href="/privacy-policy">Privacy Policy</a></li>
									<li><a href="/terms-and-condition">Terms of Use</a></li>
									{{-- <li><a href="/faq">Affiliate Program</a></li> --}}
									{{-- <li><a href="/faq">Areas of Service</a></li> --}}
									
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Help Station</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="/faq">FAQs</a></li>
									<li><a href="/return-policy">Return Policy</a></li>
									<li><a href="/faq">Free Design Proofs</a></li>
									{{-- <li><a href="/faq">Shipping</a></li> --}}
									<li><a href="/sample-kit">Sample Kit</a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="footer_bottom_boxed clearfix">
					<div class="row align-items-center justify-content-lg-between justify-content-md-between">
						

						<div class="col-lg-4 col-md-6">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Customer Reviews</h3>
								<img src="/assets/images/New/certificate.png" height="150" width="150" alt="">
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
								<h3 class="footer_widget_title text-secondary">Add Us on Social Media?</h3>
								<ul class=" ul_li mb_30 clearfix" style="font-size: 27px;">
									<li class="mr-4">
										<a class="text-grey" href="#!">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="mr-4">
										<a class="text-grey" href="#!">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li class="mr-4">
										<a class="text-grey" href="#!">
											<i class="fab fa-youtube"></i>
										</a>
									</li>
									<li class="mr-4">
										<a class="text-grey" href="#!">
											<i class="fab fa-pinterest"></i>
										</a>
									</li>
									<li class="mr-4">
										<a class="text-grey" href="#!">
											<i class="fab fa-linkedin"></i>
										</a>
									</li>
								</ul>
								<h3 class="footer_widget_title text-secondary">Powerful Shoppers</h3>
								<img src="/assets/images/New/footerimg-2.png" height="300" width="300" alt="">
							
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="widget footer_useful_links">
								<h3 class="footer_widget_title text-secondary">Guaranteed SAFE Checkout</h3>
								<img src="/assets/images/New/footerimg3.png" height="800" width="800" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center mt-5">
					  <div class="col-lg-12 col-md-12">
						<p class="copyright_text mb-0">© Copyright <script>document.write(new Date().getFullYear());</script><a class="author_links ml-1 mr-1" target="_blank" href="/"> amdaprints.com</a> All Right Reserved</p>
					</div>  
				</div>
				
			</div>
			<div class="line_wrap line_white">
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			</div>
		</footer>
		<!-- footer_section - end
		================================================== -->
        <!-- sidebar mobile menu - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="sidebar_mobile_menu">

					<span class="close_btn"><i class="fal fa-times"></i></span>

					<div class="mobile_menu_list clearfix">
						<ul class="ul_li_block clearfix">
							<li class="active">
								<a href="#!">Home</a>
							
							</li>
							<li><a href="">About</a></li>

							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
								<ul class="dropdown-menu">
									<li><a href="shop.html">Our Products</a></li>
									<li><a href="shop_details.html">Product Details</a></li>
								</ul>
							</li>
							
							<li><a href="">Conatct</a></li>    
						</ul>
					</div>

				</div>
                {{-- <div class="cart_sidebar">
					<span class="close_btn"><i class="fal fa-times"></i></span>
					<div class="cart_items_list">
						<ul class="ul_li_block clearfix">
							<li>
								<div class="cart_item clearfix">
									<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
									<div class="item_image">
										<img src="assets/images/recent_works/img_01.png" alt="image_not_found">
									</div>
									<div class="item_content">
										<h3 class="item_title">
											Smaing Podcast Epis Ode 15 With Phile
										</h3>
										<span class="item_price">₹30.00</span>
									</div>
								</div>
							</li>

							<li>
								<div class="cart_item clearfix">
									<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
									<div class="item_image">
										<img src="assets/images/recent_works/img_02.png" alt="image_not_found">
									</div>
									<div class="item_content">
										<h3 class="item_title">
											Smaing Podcast Epis Ode 15 With Phile
										</h3>
										<span class="item_price">₹30.00</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<ul class="total_price ul_li_block clearfix">
						<li><span>Total:</span> <small>₹60.00</small></li>
						<li><span>Vat:</span> <small>₹5.00</small></li>
						<li><span>SubtoTal</span> <small>₹65.00</small></li>
					</ul>
					<ul class="btns_group ul_li clearfix">
						<li><a class="bg_default_orange" href="#!">View Cart</a></li>
						<li><a class="bg_default_yellow" href="#!">Checkout</a></li>
					</ul>
				</div> --}}
				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu - end
			================================================== -->
					<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
	  <div class="modal-content" style="background: transparent">
		
		<div class="modal-body p-0">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-7">
			<div class="card shadow border border-0">
				<div class="card-header bg_default_blue text-center">
					<h5 class="text-light">Login</h5>
				</div>
				<div class="card-body">

					<form id="loginForm">
						<b class="text-dark">Email or Mobile</b>
						<div class="form-group">
							<input type="email" name="email" id="" class="form-control" required>
						</div>
						<b class="text-dark">Password</b>
						<div class="form-group">
							<input type="password" name="password" id="" class="form-control" required>
						</div>
						<div class="form-group">
							<button class="addtocart_btn custom_btn bg_default_orange" type="button" id="loginBtnFront">Login</button>
							<a href="/user/register" target="_blank" class="float-right">Create new account?</a>
						</div>
					</form>
				</div>
			</div>
				</div>
				<div class="col-md-5">
					<div class="card border-0 bg-transparent">
						<div class="card-body text-center">
							<a href="/redirect/google" class="mb-3 addtocart_btn custom_btn bg-google2 pt-3 pb-3" target="_blank"><i class="fab fa-google mr-2"></i> Login with Google</a>
							{{-- <hr class="hr-text" data-content="OR"> --}}
							<a href="/redirect/facebook" class="addtocart_btn custom_btn bg-facebook2 pt-3 pb-3" target="_blank"><i class="fab fa-facebook mr-2"></i> Login with Facebook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	  </div>
	</div>
  </div>