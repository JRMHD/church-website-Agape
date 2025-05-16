<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Page Title -->
    <title>Page Not Found | Agape Temple Global Ministry</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="404 Error | Agape Temple Global Ministry" />
    <meta name="description"
        content="Oops! The page you're looking for doesn't exist. Visit Agape Temple Global Ministry to reconnect with Spirit-led worship, outreach, and faith-building content." />
    <meta name="robots" content="noindex, follow" />
    <meta name="author" content="Agape Temple Global Ministry" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.agapetempleglobalministryafrica.com/404.html" />
    <meta property="og:title" content="Page Not Found | Agape Temple Global Ministry" />
    <meta property="og:description"
        content="The page you're seeking isn’t available. Click to return to Agape Temple Global Ministry and continue exploring our ministry." />
    <meta property="og:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-404-banner.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="http://www.agapetempleglobalministryafrica.com/404.html" />
    <meta property="twitter:title" content="Page Not Found | Agape Temple Global Ministry" />
    <meta property="twitter:description"
        content="This page does not exist. Return to Agape Temple Global Ministry to reconnect with our message of hope and faith." />
    <meta property="twitter:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-404-banner.jpg" />

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="20x20" type="image/png" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/iconmoon.css" />
    <link rel="stylesheet" href="assets/css/hover-min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
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

    <!-- Error Background -->
    <div class="error-section bg-shape" style="background-image: url(assets/img/home-six/shape/error-shape.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="assets/img/home-six/shape/404.png" alt="404 - Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Content -->
    <div class="error-section style-01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="content">
                        <h4 class="title">Oops! This page doesn’t exist.</h4>
                        <p>We're sorry, but the page you’re looking for could not be found. Trust in the Lord — you’ll
                            be redirected shortly.</p>
                        <p><strong>Redirecting in <span id="countdown">10</span> seconds...</strong></p>
                    </div>
                    <div class="btn-wrapper desktop-center">
                        <a href="/" class="boxed-btn error-btn"><i class="fas fa-arrow-right"></i>Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Countdown and Redirect Script -->
    <script>
        let count = 10;
        const countdownEl = document.getElementById("countdown");

        const timer = setInterval(() => {
            count--;
            countdownEl.textContent = count;
            if (count <= 0) {
                clearInterval(timer);
                window.location.href = "/";
            }
        }, 1000);
    </script>


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
