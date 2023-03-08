<!-- Footer Start -->
<footer class="applghu-footer-area" data-background="assets/img/studio-img-32/footer-bg.jpg">
			<div class="container" style="background-color:#33475b">
				<div class="row">
					<div class="col-xl-12">
						<div class="applghu-footer-top">
							<div class="applghu-footer-logo">
								<img src="{{asset('assets')}}/images/footer-logo.png" alt="Footer Logo">
							</div>
						</div>	
					</div>
				</div>

				<div class="row">
					<div class="col-xl-4 col-md-6">
						<div class="applghu-footer-about applghu-footer-widget">
							<h3>About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<ul class="applghu-footer-about-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="applghu-footer-widget applghu-footer-service">
							<h3>Service</h3>
							<div class="applghu-footer-service-link">
								<ul>
									<li><a href="#">Baranding Design</a></li>
									<li><a href="#">Graphics Design</a></li>
									<li><a href="#">Video Production</a></li>
									<li><a href="#">Audio Production</a></li>
									<li><a href="#">Photo Editing</a></li>
								</ul>
								<ul>
									<li><a href="#">App Development</a></li>
									<li><a href="#">Website  Design</a></li>
									<li><a href="#">Digital Marketing</a></li>
									<li><a href="#">Business Research</a></li>
									<li><a href="#">Seo Analysis</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="applghu-footer-widget applghu-footer-contact">
							<h3>Contact us</h3>
							<div class="applghu-footer-single-contact">
								<div class="applghu-footer-contact-icon-box">
									<i class="flaticon-home-1"></i>
								</div>
								<p>789-987 Dhaka avenue Brooklyn, <br> 
									NY 1176, USA</p>
							</div>
							<div class="applghu-footer-single-contact">
								<div class="applghu-footer-contact-icon-box">
									<i class="flaticon-phone-call"></i>
								</div>
								<p>
									<span>+98 157 455 457</span>
									<span>+88 011 471 478</span>
								</p>
							</div>
							<div class="applghu-footer-single-contact">
								<div class="applghu-footer-contact-icon-box">
									<i class="flaticon-email"></i>
								</div>
								<p>
									SaaSiosupport@gmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="applghu-copyright-area">
							<div class="applghu-copyright-left">
								<p>SaaSio &copy; Copyright_2023
	<meta name="keywords" content="	accountant, advertising, advisor, agency, broker, business, clean, consulting, creative, elementor, finance, insurance, marketing, modern, portfolio"></p>
							</div>
							<ul class="applghu-copyright-right">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Condition</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->

        <!-- For Js Library -->
		<script src="{{asset('assets')}}/js/jquery.js"></script>
		<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
		<script src="{{asset('assets')}}/js/owl.js"></script>
		<script src="{{asset('assets')}}/js/waypoints.min.js"></script>
		<script src="{{asset('assets')}}/js/wow.min.js"></script>
		<script src="{{asset('assets')}}/js/isotope.pkgd.js"></script>
		<script src="{{asset('assets')}}/js/appear.js"></script>
		<script src="{{asset('assets')}}/js/progress-bar-32.js"></script>
		<script src="{{asset('assets')}}/js/progress-bar.js"></script>
		<script src="{{asset('assets')}}/js/rbtools-32.min.js"></script>
		<script src="{{asset('assets')}}/js/rs6.min-32.js"></script>
		<script src="{{asset('assets')}}/js/scripts-32.js"></script>	
	    <script>		
            var	revapi4,
                tpj;
            function revinit_revslider41() {
                jQuery(function() {
                    tpj = jQuery;
                    revapi4 = tpj("#rev_slider_4_1");
                    if(revapi4==undefined || revapi4.revolution == undefined){
                        revslider_showDoubleJqueryError("rev_slider_4_1");
                    }else{
                        revapi4.revolution({
                            DPR:"dpr",
                            sliderLayout:"fullwidth",
                            visibilityLevels:"1240,1024,778,480",
                            gridwidth:1240,
                            gridheight:930,
                            perspective:600,
                            perspectiveType:"global",
                            editorheight:"930,768,960,720",
                            responsiveLevels:"1240,1024,778,480",
                            progressBar:{disableProgressBar:true},
                            navigation: {
                                wheelCallDelay:1000,
                                onHoverStop:false,
                                arrows: {
                                    enable:true,
                                    tmp:"<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
                                    style:"zeus",
                                    rtl:true,
                                    left: {
                                        h_offset:30
                                    },
                                    right: {
                                        h_offset:30
                                    }
                                }
                            },
                            fallbacks: {
                                allowHTML5AutoPlayOnAndroid:true
                            },
                        });
                    }
                    
                });
            } // End of RevInitScript
            var once_revslider41 = false;
            if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider41 ) { once_revslider41 = true; revinit_revslider41();}});} else {once_revslider41 = true; revinit_revslider41();}
	    </script>