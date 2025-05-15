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
    @include('header')

    <!-- 404/Error Section Start Here -->
    <div class="error-section bg-shape" style="background-image: url(assets/img/home-six/shape/error-shape.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="assets/img/home-six/shape/404.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="error-section style-01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="content">
                        <h4 class="title">OPPS! Page not found</h4>
                        <p>Proin rutrum sem at rutrum ultrirecies. Nunc felis neque, dictum ut porta a, ullamcorper vel
                            ante. Quisque none consequat.</p>
                    </div>
                    <div class="btn-wrapper desktop-center">
                        <a href="index.html" class="boxed-btn error-btn"><i class="fas fa-arrow-right"></i>Go to
                            home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404/Error Section End Here -->

    <!-- footer area start -->
    @include('footer')
    <!-- footer area end -->


    <!-- News Section End -->
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
