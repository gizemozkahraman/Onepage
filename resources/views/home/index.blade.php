@extends('layouts.main')

@section('content')
    @include('layouts.slider')
    <!-- Features Start -->
    <section class="applghu-features-area">
                            
        <div class="container applghu-feature-container">
            <img class="applghu-feature-shape-left" src="{{asset('assets')}}/images/feature-shape-left.png" alt>
            <img class="applghu-feature-shape-right" src="{{asset('assets')}}/images/feature-shape-right.png" alt>
        
            <!-- Section Heading Start -->
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="applghu-section-heading">
                        <p class="applghu-section-heading-subtitle">How It Work</p>
                        <h2 class="applghu-section-heading-title">SaaSio 3 Steps of our work</h2>
                    </div>
                </div>
            </div>
            <!-- Section Heading End -->

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="applghu-single-features wow fadeInUp" data-wow-delay="0.2s">
                        <div class="applghu-feature-icon-box">
                            <i class="flaticon-choose"></i>
                        </div>
                        <h3>Getting Option To Choose </h3>
                        <p>tempor incididunt ut labore et dolore magna gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="applghu-single-features wow fadeInUp" data-wow-delay="0.4s">
                        <div class="applghu-feature-icon-box">
                            <i class="flaticon-coding"></i>
                        </div>
                        <h3>Work Hard On The Project </h3>
                        <p>tempor incididunt ut labore et dolore magna gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="applghu-single-features wow fadeInUp" data-wow-delay="0.6s">
                        <div class="applghu-feature-icon-box">
                            <i class="flaticon-check-mark"></i>
                        </div>
                        <h3>Wait for Finsih Work </h3>
                        <p>tempor incididunt ut labore et dolore magna gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- About Start -->
    <section id="applghu-about" class="applghu-about-area">
        <img class="applghu-about-round-shape" src="{{asset('assets')}}/images/about-round-shape.png" alt="Shape">
        <img class="applghu-about-cross-shape" src="{{asset('assets')}}/images/about-cross-shape.png" alt="Shape">

        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="applghu-about-img">
                        <img src="{{asset('assets')}}/images/about-left-img.png" alt="About left">
                        <div class="applghu-about-project-box">
                            <h2>4850</h2>
                            <p>Project Complet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="applghu-about-content">
                        <p class="applghu-about-sub-title">About Us SaaSio</p>
                        <h2 class="applghu-about-title">Creative challenges  are <br>
                            our Passion</h2>

                        <p class="applghu-about-text">Our team of designers and developers work closely together to build a creative and positive working environment. Functionality is as important to us as aesthetics.
                        </p>

                        <div class="applghu-about-progressbar-area">
                            <div class="applghu-single-progress-parent">
                                <h3>Quality Service</h3>
                                <div class="applghu-single-progress">
                                    <div class="applghu-single-progress-bar" data-percent="85">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="applghu-single-progress-parent">
                                <h3>Project Completed</h3>
                                <div class="applghu-single-progress">
                                    <div class="applghu-single-progress-bar" data-percent="90">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="applghu-about-btn" href="#">More About <span><i class="flaticon-right-arrow-2"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Our Achievement Start -->
    <section class="applghu-achievement-area" data-background="assets/img/studio-img-32/achievement-bg.jpg">
        <img class="applghu-achievement-shape-one" src="{{asset('assets')}}/images/achievement-shape-1.png" alt="achivement shape">
        <img class="applghu-achievement-shape-two" src="{{asset('assets')}}/images/achievement-shape-2.png" alt="achivement shape">
        <img class="applghu-achievement-shape-three" src="{{asset('assets')}}/images/achievement-shape-3.png" alt="achivement shape">
       
        <div class="container">
            <div class="row">
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="applghu-achievement-left">
                        <p class="applghu-achievement-left-sub-title" style="color:black">Our Achievement</p>
                        <h2 class="applghu-achievement-left-title" style="color:black">Why choose our <br>
                            studio for your projects?</h2>
                        <p class="applghu-achievement-left-text" style="color:black">We are a command of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
                        
                        <a class="applghu-achievement-btn" href="#">Order Service <span><i class="flaticon-right-arrow-2"></i></span></a>
                            
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="applghu-achievement-right">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-achievement-box wow fadeInUp" data-wow-delay="0.2s">
                                    <h2>6500+</h2>
                                    <p>Completed projects to the
                                        end by our specialists.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-achievement-box wow fadeInUp" data-wow-delay="0.4s">
                                    <h2>2.5K</h2>
                                    <p>Customers who were
                                        satisfied with our work.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-achievement-box wow fadeInUp" data-wow-delay="0.6s">
                                    <h2>110+</h2>
                                    <p>A large team of the best
                                        specialists.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-achievement-box wow fadeInUp" data-wow-delay="0.8s">
                                    <h2>100%</h2>
                                    <p>Our values are good 
                                        organization and  result </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Achievement End -->

    <!-- Service Start -->
    <section id="applghu-service" class="applghu-service-area" data-background="assets/img/studio-img-32/service-bg.jpg">
        <div class="container">

            <!-- Section Heading Start -->
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="applghu-section-heading">
                        <p class="applghu-section-heading-subtitle">SaaSio Service List</p>
                        <h2 class="applghu-section-heading-title">Take Business Services From <br>
                            Our Experienced Stuff</h2>
                    </div>
                </div>
            </div>
            <!-- Section Heading End -->

            <div class="row">
                @foreach($services as $value)
                    <div class="col-xl-4 col-md-6">
                        <div class="applghu-single-service wow fadeInUp" data-wow-delay="0.2s">
                            <div class="applghu-service-icon-box">
                                <i class="{{$value->icon}}"></i>
                            </div>
                            <h3>{{$value->name}}</h3>
                            <p>{{$value->description}} </p>
                        
                            <a class="applghu-service-btn" href="#">
                                <i class="flaticon-add"></i>
                            </a>
                        </div>
                    </div>
                @endforeach               
            </div>
        </div>
    </section>
    <!-- Service End -->
    <!-- Why Choose us Start -->
    <section class="applghu-whychoose-us-area" data-background="assets/img/studio-img-32/why-choose-us-bg.png">

        <img class="applghu-whychoose-us-shape" src="{{asset('assets')}}/images/whychoose-us-shape.png" alt="whychoose-us-shape">

        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="applghu-whychoose-us-left">
                        <h3 class="applghu-whychoose-us-left-subtitle" style="color:black">Why Choose Us</h3>
                        <h2 class="applghu-whychoose-us-left-title" style="color:black">Reason For Choosing Our 
                            Strike Consultancy</h2>
                        <p class="applghu-whychoose-us-left-text" style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        
                        <div class="applghu-whychooseus-form">
                            <form action="#">
                                <div class="applghu-whychoose-form-input">
                                    <input type="text" placeholder="Name">
                                    <input type="email" placeholder="Email">
                                    <input type="number" placeholder="Phone">
                                    <input type="text" placeholder="Subject">
                                </div>
                                <textarea placeholder="Type Your Text"></textarea>
                                <input type="submit" value="Submit Now">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="applghu-whychoose-us-right">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-whychoose wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="applghu-whychoose-icon-box">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <h3>Quick Response</h3>
                                    <p>Do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-whychoose wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="applghu-whychoose-icon-box">
                                        <i class="flaticon-team"></i>
                                    </div>
                                    <h3>Exprinced Team</h3>
                                    <p>Do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-whychoose wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="applghu-whychoose-icon-box">
                                        <i class="flaticon-customer-support"></i>
                                    </div>
                                    <h3>24/7 Support</h3>
                                    <p>Do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6 col-lg-6">
                                <div class="applghu-single-whychoose wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="applghu-whychoose-icon-box">
                                        <i class="flaticon-bank"></i>
                                    </div>
                                    <h3>Flexible Payment</h3>
                                    <p>Do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose us End -->

    <!-- Projects Start -->
    <section id="applghu-project" class="applghu-projects-area">
        <div class="container">

            <!-- Section Heading Start -->
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="applghu-section-heading">
                        <p class="applghu-section-heading-subtitle">SaaSio Project</p>
                        <h2 class="applghu-section-heading-title">Our Team's work with Projects</h2>
                    </div>
                </div>
            </div>
            <!-- Section Heading End -->

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="applghu-project-navigation">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".photo-edi">Photo Editing</li>
                            <li data-filter=".video-pro">Video Production</li>
                            <li data-filter=".graphics-design">Graphics Design</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row applghu-project-grid">
                <div class="col-xl-6 col-md-6 col-lg-6 applghu-project-item graphics-design photo-edi">
                    <div class="applghu-single-project applghu-project-big">
                        <img src="{{asset('assets')}}/images/project-big-1.jpg" alt>
                        <div class="applghu-single-project-overlay">
                            <div class="applghu-project-overlay-content">
                                <i class="flaticon-add"></i>
                                <p>Tony Kagn</p>
                                <h3>Designing Research</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6 applghu-project-item video-pro">
                    <div class="applghu-single-project applghu-project-big">
                        <img src="{{asset('assets')}}/images/project-big-2.jpg" alt>
                        <div class="applghu-single-project-overlay">
                            <div class="applghu-project-overlay-content">
                                <i class="flaticon-add"></i>
                                <p>Tony Kagn</p>
                                <h3>Designing Research</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6 applghu-project-item photo-edi">
                    <div class="applghu-single-project applghu-project-small">
                        <img src="{{asset('assets')}}/images/project-small-1.jpg" alt>
                        <div class="applghu-single-project-overlay">
                            <div class="applghu-project-overlay-content">
                                <i class="flaticon-add"></i>
                                <p>Tony Kagn</p>
                                <h3>Designing Research</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6 applghu-project-item video-pro">
                    <div class="applghu-single-project applghu-project-small">
                        <img src="{{asset('assets')}}/images/project-small-2.jpg" alt>
                        <div class="applghu-single-project-overlay">
                            <div class="applghu-project-overlay-content">
                                <i class="flaticon-add"></i>
                                <p>Tony Kagn</p>
                                <h3>Designing Research</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-6 applghu-project-item video-pro photo-edi">
                    <div class="applghu-single-project applghu-project-small">
                        <img src="{{asset('assets')}}/images/project-small-3.jpg" alt>
                        <div class="applghu-single-project-overlay">
                            <div class="applghu-project-overlay-content">
                                <i class="flaticon-add"></i>
                                <p>Tony Kagn</p>
                                <h3>Designing Research</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects End -->

    <!-- Team Start -->
    <section class="applghu-team-area">
        <div class="container">
            
            <!-- Section Heading Start -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="applghu-section-heading">
                        <p class="applghu-section-heading-subtitle">Team Member</p>
                        <h2 class="applghu-section-heading-title">Meet Our Professional <br>
                            Experienced Team Members
                        </h2>
                        <p class="applghu-section-heading-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <!-- Section Heading End -->

            <div class="row">
                <div class="col-xl-12 applghu-team-slider owl-carousel">
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="{{asset('assets')}}/images/team-1.png" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a class="applghu-team-overlay-social-share" href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="{{asset('assets')}}/images/team-2.png" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                    
                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="{{asset('assets')}}/images/team-3.jpg" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="{{asset('assets')}}/images/team-4.jpg" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="assets/img/studio-img-32/team-1.png" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a class="applghu-team-overlay-social-share" href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="assets/img/studio-img-32/team-2.png" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>
                                    
                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="assets/img/studio-img-32/team-3.jpg" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <div class="applghu-single-team">
                        <div class="applghu-single-team-img">
                            <img src="assets/img/studio-img-32/team-4.jpg" alt>
                            <div class="applghu-single-team-overlay">
                                <h3>Danial Vetori</h3>
                                <p>Graphics Designer</p>

                                <div class="applghu-team-overlay-social-wrap">
                                    <a href="#"><i class="flaticon-share"></i></a>

                                    <ul class="applghu-overlay-social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Team End -->
    <!-- Contact Start -->
    <section id="applghu-contact" class="applghu-get-in-touch-area">
        <div class="container">
            <!-- Section Heading Start -->
            <div class="row">
            <div class="col-xl-12 text-center">
                    <div class="applghu-section-heading">
                        <p class="applghu-section-heading-subtitle">Get In Touch</p>
                        <h2 class="applghu-section-heading-title">Feel free to contact with us <br> any time.</h2>
                    </div>
                </div>
            </div>
            <!-- Section Heading End -->
            
            <div class="row">
                <div class="col-xl-12">
                    <div class="applghu-get-in-touch-content-wrap">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="applghu-get-in-touch-map-wrap">
                                    <div id="applghu-get-in-touch-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26200.194933506235!2d89.52481474309158!3d22.87311380087818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1635326791631!5m2!1sen!2sbd" width="100" height="415" style="border:0;" allowfullscreen loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="applghu-get-in-touch-contact-info">
                                    <div class="applghu-single-get-in-touch-info wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="applghu-get-in-touch-info-icon-box">
                                            <i class="flaticon-home-1"></i>
                                        </div>
                                        <div class="applghu-get-in-touch-info-text">
                                            <h3>Address:</h3>
                                            <p>526 Melrose Street,Water Mill, 11976 New York.</p>
                                        </div>
                                    </div>
                                    <div class="applghu-single-get-in-touch-info wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="applghu-get-in-touch-info-icon-box">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="applghu-get-in-touch-info-text">
                                            <h3>Phone:</h3>
                                            <p>
                                                <span>+080 707 555-321</span>
                                                <span>+105 773 321 7775</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="applghu-single-get-in-touch-info wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="applghu-get-in-touch-info-icon-box">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="applghu-get-in-touch-info-text">
                                            <h3>Email:</h3>
                                            <p>
                                                <span>Info@Example.Com</span>
                                                <span>Support@Example.Com</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Get In Touch End -->
    <!-- Blog End -->
@endsection