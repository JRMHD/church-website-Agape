<footer class="footer-area line-bg" style="background-image: url(assets/img/line.png);">
    <div class="footer-top issue style-01">
        <div class="container">
            <div class="footer-top-border padding-bottom-60 padding-top-75">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget wow animate__animated animate__fadeInUp">
                                <a href="{{ url('/') }}" class="footer-logo">
                                    <img src="{{ asset('assets/img/footer-logo.png') }}" alt="footer logo">
                                </a>
                                <p>
                                    President represented Delaware for 36 years in the U.S. Senate before becoming
                                    the 47th Vice President of the United States.
                                </p>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <ul class="contact_info_list wow animate__animated animate__fadeInUp">
                            <li class="single-info-item">
                                <div class="icon style-01"><i class="icon-location"></i></div>
                                <div class="details style-01">66 Broklyn Street 30 Road. New York United States</div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon"><i class="icon-envelope"></i></div>
                                <div class="details">info@yourmail.com</div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon"><i class="icon-phone"></i></div>
                                <div class="details">009-215-5599</div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 offset-lg-1 col-md-12">
                        <div class="footer-widget widget widget_subscribe subscribe-bg"
                            style="background-image: url({{ asset('assets/img/Mask-flag.png') }});">
                            <div class="shape-01"></div>
                            <div class="shape-02"></div>
                            <div class="header-content">
                                <h4 class="title">Join Our Newsletter</h4>
                            </div>
                            <form class="subscribe-form" action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="boxed-btn btn-sanatory style-03">Subscribe Now <i
                                            class="icon-paper-plan"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer Links -->
            <div class="footer-bottom-border">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li><a href="{{ url('/about') }}">Our Story</a></li>
                                <li><a href="{{ url('/team') }}">Team</a></li>
                                <li><a href="{{ url('/event') }}">News</a></li>
                                <li><a href="{{ url('/dashboard') }}">Election</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                <li><a href="{{ url('/event') }}">News</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">Events Campaigns</h4>
                            <div class="footer-event-item">
                                <div class="content">
                                    <div class="designation">
                                        <span class="event">Event</span>
                                        <span class="date">29 May 2021</span>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ url('/event') }}">Let's meet for protecting eco system</a>
                                    </h6>
                                    <p>
                                        Every pleasure is to be welcomed, pain avoided owing to duty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div
                            class="footer-widget widget style-01 widget_nav_menu wow animate__animated animate__fadeInUp">
                            <div class="footer-event-item">
                                <div class="content">
                                    <div class="designation">
                                        <span class="event">Event</span>
                                        <span class="date">29 May 2021</span>
                                    </div>
                                    <h6 class="title">
                                        <a href="{{ url('/event') }}">Let's meet for protecting eco system</a>
                                    </h6>
                                    <p>
                                        Every pleasure is to be welcomed, pain avoided owing to duty.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-area-inner text-center">
                                &copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.
                                Designed and Developed by
                                <a href="https://www.jrmhd.tech/" target="_blank" rel="noopener noreferrer">
                                    Jrmhd Technologies
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
