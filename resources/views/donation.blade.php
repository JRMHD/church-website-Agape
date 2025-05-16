<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Page Title -->
    <title>Donate | Agape Temple Global Ministry</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Donate | Agape Temple Global Ministry" />
    <meta name="description"
        content="Support the work of Agape Temple Global Ministry in Kenya and the Netherlands. Your donation helps us preach the Gospel, feed the hungry, and build God’s kingdom." />
    <meta name="keywords"
        content="donate to church, Agape Temple giving, Christian ministry support, tithes, offerings, missions, help ministry, Apostle Geoffrey Mboga, Rev. Helene Oord, spiritual giving" />
    <meta name="author" content="Agape Temple Global Ministry" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.agapetempleglobalministryafrica.com/donate.html" />
    <meta property="og:title" content="Donate | Agape Temple Global Ministry" />
    <meta property="og:description"
        content="Be a blessing. Give today to support the outreach, missions, and church programs at Agape Temple Global Ministry." />
    <meta property="og:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-donation-banner.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="http://www.agapetempleglobalministryafrica.com/donate.html" />
    <meta property="twitter:title" content="Donate | Agape Temple Global Ministry" />
    <meta property="twitter:description"
        content="Support the ministry with your giving — every seed you sow builds the Kingdom of God." />
    <meta property="twitter:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-donation-banner.jpg" />

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="20x20" type="image/png" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/iconmoon.css">
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
    <!-- Donation section start here -->
    <div class="about-us-section-area about-bg" style="background-image: url(assets/img/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="about-inner donation">
                        <h1 class="title">Donations</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/donation">Donations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation section End here -->
    <style>
        .donation-form .form-group {
            margin-bottom: 20px;
        }

        .paypal-button img {
            transition: transform 0.3s ease;
        }

        .paypal-button:hover img {
            transform: scale(1.05);
        }

        .paypal-button p {
            margin-top: 10px;
            font-weight: 600;
            color: #003087;
        }

        .button-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .modern-donate-btn {
            background: linear-gradient(to right, #4b6cb7, #182848);
            color: #fff;
            border: none;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: auto;
            min-width: 220px;
            text-align: center;
        }

        .modern-donate-btn:hover {
            background: linear-gradient(to right, #182848, #4b6cb7);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .modern-donate-btn i {
            margin-right: 8px;
        }
    </style>

    <!-- Donation Form Section Start Here -->
    <div class="issues-around-us-section style-01">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <div class="subtitle wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>Support Our Ministry</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Your Giving Makes Ministry Happen</h4>
                        <p class="description">Your donation helps us spread the Gospel, support families, and reach
                            communities in Kenya, the Netherlands, and beyond. Thank you for partnering with us in faith
                            and love.</p>
                    </div>

                    <form class="donation-form wow animate__animated animate__fadeInUp" action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Your Email Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control"
                                        placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="country" class="form-control"
                                        placeholder="Your Country">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" rows="5" class="form-control" placeholder="Write your message..."></textarea>
                                </div>
                            </div>
                            <div class="button-wrapper text-center">
                                <button type="submit" class="modern-donate-btn">
                                    <i class="fas fa-paper-plane"></i> Send Request
                                </button>
                            </div>

                        </div>
                    </form>

                    <div class="paypal-donate text-center mt-5">
                        <p><strong>Prefer to donate directly?</strong></p>
                        <a href="https://www.paypal.com/donate?business=agapetempleglobalministryafric@gmail.com"
                            target="_blank" class="paypal-button">
                            <img src="/assets/img/paypal.png" alt="Donate via PayPal" style="height: 50px;">
                            <p class="mt-2">Click here to donate via PayPal</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation Form Section End Here -->

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
