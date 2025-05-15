<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Senatory Political HTML-5 Template</title>
    <!-- favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="20x20" type="image/png" />
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!-- iconmoon css -->
    <link rel="stylesheet" href="assets/css/iconmoon.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="assets/css/hover-min.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; display: flex; align-items: center; justify-content: center; z-index: 9999;">
        <div style="width: 100px; height: 100px;">
            <img src="\assets\img\preloader.png" alt="Loading..."
                style="width: 100%; height: 100%; animation: zoom 1s ease-in-out infinite;">
        </div>
    </div>

    <style>
        @keyframes zoom {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <!-- preloader area end -->

    <!-- Header-top-start -->
    @include('header')
    <!-- services section start here -->
    <div class="about-us-section-area about-bg" style="background-image: url(assets/img/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-7">
                    <div class="about-inner services">
                        <h1 class="title">Services</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section End here -->

    <!-- Secrvices Single Section Start here -->
    <div class="services-single-section">
        <div class="container">
            <img src="assets/img/Ellipse-02.png" class="services-shape" alt="">
            <img src="assets/img/Ellipse-02.png" class="services-shape-02" alt="">
            <img src="assets/img/Ellipse-05.png" class="services-shape-03" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title">
                        <h4 class="title">We provide a full range services for Our Country</h4>
                        <p class="description wow animate__ animate__fadeInUp animated">
                            Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it
                            will
                            frequently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-school"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">School & University</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp animate__delay-1s">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-sweet-hone"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">City Traffic & Parking</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp animate__delay-2s">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-kids-house"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Parks & Recreation</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp animate__delay-3s">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-gym"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Sports & Fitness</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp animate__delay-4s">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-school"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">School & University</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-single-item wow animate__animated animate__fadeInUp animate__delay-5s">
                        <img src="assets/img/flag-shape.png" class="shape-01 style-01" alt="" />
                        <div class="icon style-01">
                            <i class="icon-hospital"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Nursing & Hospitality</a></h4>
                            <p class="description">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing. </p>
                        </div>
                        <div class="btn-wrapper">
                            <a href="services-single.html" class="boxed-btn event-btn"><i
                                    class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Single Section Start here -->

    <!-- People say section-02 start here -->
    <div class="people-say-section style-01 people-say-bg"
        style="background-image: url(assets/img/group-activity-02.png);">
        <div class="shapes">
            <img src="assets/img/shape-04.png" class="shape-01" alt="">
            <img src="assets/img/shape-03.png" class="shape-02" alt="">
            <div class="shape-03"></div>
            <div class="shape-04"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="people-say-single-item-02 margin-bottom-60 wow animate__animated animate__fadeInLeft">
                        <div class="testimonial-carousel-four">
                            <div class="people-say-single-item style-01"
                                style="background-image: url(assets/img/line-03.png);">
                                <img src="assets/img/quotes-02.png" class="quotes style-02" alt="">
                                <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <p class="description">" Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia
                                        deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt in
                                        culpa qui officia
                                        deserunt mollit anim id, sint occaecat cupidatat non proident, sunt in culpa qui
                                        "</p>
                                    <div class="author-meta">
                                        <div class="thumb">
                                            <img src="assets/img/thumb.png" alt="">
                                        </div>
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="people-say-single-item style-01"
                                style="background-image: url(assets/img/line-03.png);">
                                <img src="assets/img/quotes-02.png" class="quotes style-02" alt="">
                                <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <p class="description">" Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia
                                        deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt in
                                        culpa qui officia
                                        deserunt mollit anim id, sint occaecat cupidatat non proident, sunt in culpa qui
                                        "</p>
                                    <div class="author-meta">
                                        <div class="thumb">
                                            <img src="assets/img/thumb.png" alt="">
                                        </div>
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="people-say-single-item style-01"
                                style="background-image: url(assets/img/line-03.png);">
                                <img src="assets/img/quotes-02.png" class="quotes style-02" alt="">
                                <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <p class="description">" Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia
                                        deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt in
                                        culpa qui officia
                                        deserunt mollit anim id, sint occaecat cupidatat non proident, sunt in culpa qui
                                        "</p>
                                    <div class="author-meta">
                                        <div class="thumb">
                                            <img src="assets/img/thumb.png" alt="">
                                        </div>
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="people-say-single-item-02 style-01 wow animate__animated animate__fadeInRight">
                        <div class="people-say-bg-02"
                            style="background-image: url(assets/img/young-man-with-flag.png);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- People say section-02 end here -->

    <!-- Project Planing Section Start Here -->
    <div class="project-plaing-section margin-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-items-wrapper planing-bg"
                        style="background-image: url(assets/img/woman-hands.png);">
                        <div class="planing-item-wrapper">
                            <div class="planing-single-item wow animate__animated animate__fadeInLeft">
                                <div class="icon">
                                    <i class="icon-manager"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title">Management</h6>
                                    <p>102+</p>
                                </div>
                            </div>
                        </div>
                        <div class="planing-item-wrapper wow animate__animated animate__fadeInLeft animate__delay-1s">
                            <div class="planing-single-item style-01">
                                <div class="icon">
                                    <i class="icon-mike"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title">Campaigns</h6>
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                        <div class="plaing-item-wrapper wow animate__animated animate__fadeInLeft animate__delay-2s">
                            <div class="planing-single-item">
                                <div class="icon">
                                    <i class="icon-location-02"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title">Coverage Area</h6>
                                    <p>98%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="princilple-single-items style-01 wow animate__animated animate__fadeInUp">
                        <div class="icon style-01">
                            <i class="icon-resource"></i>
                        </div>
                        <div class="content">
                            <h4 class="title style-01">Project Planing</h4>
                            <p class="style-01">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing.</p>
                        </div>
                    </div>
                    <div
                        class="princilple-single-items style-01 wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="icon style-01">
                            <i class="icon-form"></i>
                        </div>
                        <div class="content">
                            <h4 class="title style-01">Collecting Requirements</h4>
                            <p class="style-01">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing.</p>
                        </div>
                    </div>
                    <div
                        class="princilple-single-items style-01 wow animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="icon style-01">
                            <i class="icon-analyzing"></i>
                        </div>
                        <div class="content">
                            <h4 class="title style-01">Analyzing About Service </h4>
                            <p class="style-01">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing.</p>
                        </div>
                    </div>
                    <div
                        class="princilple-single-items style-01 wow animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="icon style-01">
                            <i class="icon-final-flag"></i>
                        </div>
                        <div class="content">
                            <h4 class="title style-01">Final Deployment</h4>
                            <p class="style-01">Efficiently orchestrate resource sucking human capital whereas
                                future-proof outsourcing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Planing Section Start Here -->

    <!-- News Section Start -->
    <div class="news-section-start margin-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="subtitle wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>Our News</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Latest News & Articles</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-single-items wow animate__animated animate__fadeInUp">
                        <div class="news-bg" style="background-image: url(assets/img/businessmen-shaking-hands.png);">
                            <span class="even">Event</span>
                            <div class="content">
                                <h4 class="title"><a href="news-single.html"> Many important brands have given us
                                        their trust</a></h4>
                                <div class="author-meta">
                                    <p class="author-name">By:Smith Roy</p>
                                    <p>24th March,2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="news-bg" style="background-image: url(assets/img/partners-shaking-hands.png);">
                            <span class="even">Event</span>
                            <div class="content">
                                <h4 class="title"><a href="news-single.html"> Many important brands have given us
                                        their trust</a></h4>
                                <div class="author-meta">
                                    <p class="author-name">By:Smith Roy</p>
                                    <p>24th March,2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="news-single-list wow animate__animated animate__fadeInRight animate__delay-2s">
                        <li class="news-single-list-items">
                            <div class="thumb">
                                <img src="assets/img/cheking-sheet.png" alt="">
                            </div>
                            <div class="content">
                                <span class="date">24th March,2021</span>
                                <h4 class="title"><a href="news-single.html"> Many important brands have given us
                                        their</a></h4>
                            </div>
                        </li>
                        <li class="news-single-list-items">
                            <div class="thumb">
                                <img src="assets/img/busisess-women.png" alt="">
                            </div>
                            <div class="content">
                                <span class="date">24th March,2021</span>
                                <h4 class="title"><a href="news-single.html"> Many important brands have given us
                                        their</a></h4>
                            </div>
                        </li>
                        <li class="news-single-list-items">
                            <div class="thumb">
                                <img src="assets/img/discussion.png" alt="">
                            </div>
                            <div class="content">
                                <span class="date">24th March,2021</span>
                                <h4 class="title"><a href="news-single.html"> Many important brands have given us
                                        their</a></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- News Section End  -->

    <!-- footer area start -->
    @include('footer')
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Mail Validation -->
    <script src="assets/js/mail-validation.js"></script>
    <!-- Contact js -->
    <script src="assets/js/contact.js"></script>
    <!-- counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- VanillaTilt effect -->
    <script src="assets/js/tilt.jquery.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- R progressbar -->
    <script src="assets/js/jQuery.rProgressbar.min.js"></script>
    <!-- Progress Bar active  -->
    <script src="assets/js/active.rProgressbar.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>


</html>
