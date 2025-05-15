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
    <!-- About Us section start here -->
    <div class="about-us-section-area about-bg" style="background-image: url(assets/img/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="about-inner volunteer">
                        <h1 class="title">Volunteer</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">Volunteer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Volunteer Form Section Start Here -->
    <div class="volunteer-section-area style-03">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title volunteer wow animate__animated animate__fadeInUp">Get Involved!</h4>
                        <p class="description style-03 wow animate__animated animate__fadeInUp">
                            Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it
                            will frequently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="volunteer-form">
                        <div class="contact-form style-01">
                            <form action="https://themeim.com/demo/senatory/request.html" class="contact-page-form"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="fname" placeholder="First Name*"
                                                class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="lname" placeholder="Last Name*"
                                                class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email*"
                                                required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="telephone" placeholder="Phone Number*"
                                                class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-question">
                            <h6 class="title">How would you like to help? </h6>
                            <div class="check-box-wrapper">
                                <div class="check-box">
                                    <label class="container-box">
                                        Telephone Calls
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Distribute Signs
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box style-01">
                                    <label class="container-box">
                                        Voter Registration
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Other
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-question">
                            <h6 class="title">How would you like to help? </h6>
                            <div class="check-box-wrapper">
                                <div class="check-box">
                                    <label class="container-box">
                                        Morning
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Afternoon
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Evening
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-question">
                            <h6 class="title">How would you like to help? </h6>
                            <div class="check-box-wrapper">
                                <div class="check-box">
                                    <label class="container-box">
                                        Sun
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Mon
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Tue
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Wed
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Thu
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Fri
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="check-box">
                                    <label class="container-box">
                                        Sat
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-question">
                            <h6 class="title">Additional comments</h6>
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="type here...."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn btn-sanatory volunteer"><i
                                    class="fas fa-arrow-right"></i>Join Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer Form Section Start Here -->

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
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>


</html>
