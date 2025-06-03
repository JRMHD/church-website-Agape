<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Primary Meta Tags -->
    <title>Agape Temple Global Ministry | Spirit-Filled Church in Kenya & the Netherlands</title>
    <meta name="title" content="Agape Temple Global Ministry | Spirit-Filled Church in Kenya & the Netherlands" />
    <meta name="description"
        content="Agape Temple Global Ministry is a Christ-centered church led by Rev. Helene H. Oord and Apostle Geoffrey J. Mboga. We spread the Gospel, empower believers, and reach communities in Kenya, the Netherlands, and beyond." />
    <meta name="keywords"
        content="Agape Temple, global ministry, Christian church, Nairobi church, Netherlands church, Apostle Geoffrey Mboga, Rev. Helene Oord, spiritual growth, Bible teaching, worship, prayer, donations, faith-based outreach" />
    <meta name="author" content="Agape Temple Global Ministry" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.agapetempleglobalministryafrica.com/" />
    <meta property="og:title"
        content="Agape Temple Global Ministry | Spirit-Filled Church in Kenya & the Netherlands" />
    <meta property="og:description"
        content="Join Agape Temple Global Ministry to experience Spirit-led worship, powerful teaching, and life-changing outreach across Kenya and the Netherlands." />
    <meta property="og:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-social-banner.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="http://www.agapetempleglobalministryafrica.com/" />
    <meta property="twitter:title"
        content="Agape Temple Global Ministry | Spirit-Filled Church in Kenya & the Netherlands" />
    <meta property="twitter:description"
        content="Christ-centered, Spirit-led, and globally reaching—discover Agape Temple Global Ministry today." />
    <meta property="twitter:image"
        content="http://www.agapetempleglobalministryafrica.com/assets/img/agape-social-banner.jpg" />

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="20x20" type="image/png" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/iconmoon.css">
    <link rel="stylesheet" href="assets/css/hover-min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
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
    <div class="header-area header-sanatory"
        style="position: relative; overflow: hidden; min-height: 100vh; display: flex; align-items: center;">
        <!-- Carousel Background Images -->
        <div class="carousel-background"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div class="carousel-slide active"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/assets/img/carousel1.jpg'); background-size: cover; background-position: center; transition: opacity 0.8s ease-in-out; opacity: 1;">
            </div>
            <div class="carousel-slide"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/assets/img/carousel2.jpg'); background-size: cover; background-position: center; transition: opacity 0.8s ease-in-out; opacity: 0;">
            </div>
            <div class="carousel-slide"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('/assets/img/carousel3.jpg'); background-size: cover; background-position: center; transition: opacity 0.8s ease-in-out; opacity: 0;">
            </div>
        </div>



        <!-- Navigation Arrows -->
        <button class="carousel-nav prev" onclick="prevSlide()"
            style="position: absolute; left: 30px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.6); color: white; width: 55px; height: 55px; border-radius: 50%; cursor: pointer; font-size: 18px; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); z-index: 100;">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-nav next" onclick="nextSlide()"
            style="position: absolute; right: 30px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.6); color: white; width: 55px; height: 55px; border-radius: 50%; cursor: pointer; font-size: 18px; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); z-index: 100;">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Carousel Indicators -->
        <div class="carousel-indicators"
            style="position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 100;">
            <button class="indicator active" onclick="goToSlide(0)"
                style="width: 14px; height: 14px; border-radius: 50%; border: 2px solid white; background: white; cursor: pointer; transition: all 0.3s ease; opacity: 1; box-shadow: 0 2px 8px rgba(0,0,0,0.3);"></button>
            <button class="indicator" onclick="goToSlide(1)"
                style="width: 14px; height: 14px; border-radius: 50%; border: 2px solid white; background: transparent; cursor: pointer; transition: all 0.3s ease; opacity: 0.7; box-shadow: 0 2px 8px rgba(0,0,0,0.3);"></button>
            <button class="indicator" onclick="goToSlide(2)"
                style="width: 14px; height: 14px; border-radius: 50%; border: 2px solid white; background: transparent; cursor: pointer; transition: all 0.3s ease; opacity: 0.7; box-shadow: 0 2px 8px rgba(0,0,0,0.3);"></button>
        </div>

        <!-- Main Content Container -->
        <div class="container nav-container home-three" style="position: relative; z-index: 50; width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-inner" style="text-align: center; color: white;">
                        <!-- header inner -->
                        <div class="subtitle style-01" style="margin-bottom: 25px; animation: fadeInUp 1.2s ease-out;">
                            <span
                                style="font-weight: bold; color: white; font-size: 20px; letter-spacing: 3px; text-shadow: 2px 2px 6px rgba(0,0,0,0.8); text-transform: uppercase; display: inline-block; padding: 10px 25px; background: rgba(255,255,255,0.1); border-radius: 30px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                                AGAPE TEMPLE GLOBAL MINISTRY AFRICA
                            </span>
                        </div>
                        <h1 class="title style-01"
                            style="font-size: 4rem; font-weight: 800; margin-bottom: 30px; line-height: 1.1; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); animation: fadeInUp 1.2s ease-out 0.3s both; background: linear-gradient(45deg, #ffffff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            Transforming Lives Through the Power of God's Love
                        </h1>
                        <p class="style-01"
                            style="font-size: 1.3rem; line-height: 1.7; margin-bottom: 40px; max-width: 850px; margin-left: auto; margin-right: auto; text-shadow: 2px 2px 4px rgba(0,0,0,0.8); animation: fadeInUp 1.2s ease-out 0.6s both; color: #f8f8f8; font-weight: 300;">
                            Join Founding Pastor Rev. Helene H. Oord and Apostle Geoffrey J. Mboga as we spread the
                            Gospel of Jesus Christ from the Netherlands to Nairobi, Kenya — igniting faith, healing
                            hearts, and equipping believers worldwide.
                        </p>
                        <div class="btn-wrapper desktop-center"
                            style="display: flex; gap: 25px; justify-content: center; align-items: center; flex-wrap: wrap; animation: fadeInUp 1.2s ease-out 0.9s both; position: relative; z-index: 100;">
                            <a href="/donation" class="boxed-btn btn-sanatory style-01 text-uppercase"
                                style="background: linear-gradient(135deg, #ff6b35, #f7931e, #ffab00); color: white; padding: 18px 35px; text-decoration: none; border-radius: 50px; font-weight: 700; font-size: 16px; transition: all 0.4s ease; box-shadow: 0 6px 20px rgba(255,107,53,0.4); display: inline-flex; align-items: center; gap: 12px; text-transform: uppercase; letter-spacing: 1px; border: none; position: relative; overflow: hidden; z-index: 101;">
                                <span style="position: relative; z-index: 2;">DONATE NOW</span>
                                <i class="fas fa-chevron-right"
                                    style="position: relative; z-index: 2; transition: transform 0.3s ease;"></i>
                                <div
                                    style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(135deg, #ff8a65, #ffb74d); transition: left 0.4s ease; z-index: 1;">
                                </div>
                            </a>
                            <a class="video-play style-04 mfp-iframe"
                                href="https://www.youtube.com/@agapetempleglobalministryafric"
                                style="color: white; text-decoration: none; display: inline-flex; align-items: center; gap: 18px; padding: 18px 30px; border: 2px solid rgba(255,255,255,0.8); border-radius: 50px; transition: all 0.4s ease; background: rgba(255,255,255,0.1); backdrop-filter: blur(15px); font-weight: 700; position: relative; z-index: 101;">
                                <div class="play-icon"
                                    style="width: 55px; height: 55px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #333; transition: all 0.4s ease; box-shadow: 0 4px 15px rgba(255,255,255,0.3);">
                                    <i class="fas fa-play" style="margin-left: 4px; font-size: 18px;"></i>
                                </div>
                                <span
                                    style="font-weight: 700; letter-spacing: 1.5px; font-size: 16px; color: white; text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">WATCH
                                    MESSAGE</span>
                            </a>
                        </div>
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header section End -->

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .indicator.active {
            animation: pulse 2s infinite;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .title.style-01 {
                font-size: 3.5rem !important;
            }

            .carousel-nav {
                width: 50px !important;
                height: 50px !important;
            }

            .carousel-nav.prev {
                left: 20px !important;
            }

            .carousel-nav.next {
                right: 20px !important;
            }
        }

        @media (max-width: 992px) {
            .header-area {
                min-height: 90vh !important;
            }

            .title.style-01 {
                font-size: 3rem !important;
            }

            .style-01 p {
                font-size: 1.1rem !important;
                max-width: 700px !important;
            }

            .btn-wrapper {
                flex-direction: column !important;
                gap: 20px !important;
            }
        }

        @media (max-width: 768px) {
            .header-area {
                min-height: 80vh !important;
            }

            .title.style-01 {
                font-size: 2.5rem !important;
                line-height: 1.2 !important;
            }

            .subtitle span {
                font-size: 16px !important;
                letter-spacing: 2px !important;
                padding: 8px 20px !important;
            }

            .style-01 p {
                font-size: 1rem !important;
                margin-bottom: 30px !important;
            }

            .carousel-nav {
                width: 45px !important;
                height: 45px !important;
                font-size: 16px !important;
            }

            .carousel-nav.prev {
                left: 15px !important;
            }

            .carousel-nav.next {
                right: 15px !important;
            }

            .boxed-btn,
            .video-play {
                padding: 15px 25px !important;
                font-size: 14px !important;
            }

            .play-icon {
                width: 45px !important;
                height: 45px !important;
            }
        }

        @media (max-width: 480px) {
            .title.style-01 {
                font-size: 2rem !important;
            }

            .subtitle span {
                font-size: 14px !important;
                letter-spacing: 1px !important;
                padding: 6px 15px !important;
            }

            .style-01 p {
                font-size: 0.9rem !important;
            }

            .btn-wrapper {
                gap: 15px !important;
            }

            .boxed-btn,
            .video-play {
                padding: 12px 20px !important;
                font-size: 13px !important;
            }

            .carousel-indicators {
                bottom: 20px !important;
            }

            .indicator {
                width: 12px !important;
                height: 12px !important;
            }
        }
    </style>


    <!-- Header bottom Section Start -->
    <div class="header-bottom-area style-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="bottom-single-items wow animate__animated animate__fadeInUp">
                        <div class="icon">
                            <i class="icon-winner-cup"></i>
                        </div>
                        <div class="content">
                            <h6 class="title">Victory in Christ</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bottom-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="icon">
                            <i class="icon-target-3696"></i>
                        </div>
                        <div class="content">
                            <h6 class="title">Focused on the Great Commission</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bottom-single-items wow animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="icon">
                            <i class="icon-tree"></i>
                        </div>
                        <div class="content">
                            <h6 class="title">Growing in Faith & Fellowship</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bottom-single-items wow animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="icon">
                            <i class="icon-love-4223"></i>
                        </div>
                        <div class="content">
                            <h6 class="title">Rooted in God's Love</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Header bottom section end -->

    <!-- Meet Member Section Start Here -->
    <div class="meet-member-section">
        <img src="assets/img/home-three-star-bg.png" class="section-star" alt="">
        <img src="assets/img/dot-shape-02.png" class="dot-shape-02" alt="">
        <img src="assets/img/dot-shape-02.png" class="dot-shape-03" alt="">
        <div class="container">
            <div class="meet-member-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meet-member-img" style="background-image: url(/assets/img/revhellen.jpg);">
                            {{-- <div class="member-quotes">
                                <h5 class="title">Faithfully Serving God's People for Over 20 Years</h5>
                                <div class="icon">
                                    <img src="assets/icon/quotes-02.svg" alt="">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meet-single-items">
                            <div class="content">
                                <div class="subtitle wow animate__animated animate__fadeInUp">
                                    <p>get to know</p>
                                    <div class="icon">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                </div>
                                <h4 class="title wow animate__animated animate__fadeInUp">Meet Rev. Helene H. Oord,
                                    Founding Pastor</h4>
                                <p class="description wow animate__animated animate__fadeInUp">Rev. Helene leads Agape
                                    Temple Global Ministry with unwavering faith and compassion. Her mission is to
                                    transform lives through the Word, prayer, and the love of Christ across the
                                    Netherlands and Kenya.</p>
                                <p class="description wow animate__animated animate__fadeInUp">Together with Apostle
                                    Geoffrey J. Mboga, she shepherds a growing global community of believers rooted in
                                    faith, healing, and spiritual growth.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="inner-single-items wow animate__animated animate__fadeInUp">
                                        <div class="icon">
                                            <i class="icon-winner-cup"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Servant Leader</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div
                                        class="inner-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                                        <div class="icon">
                                            <i class="icon-target-3696"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Spirit-Led Vision</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div
                                        class="inner-single-items wow animate__animated animate__fadeInUp animate__delay-2s">
                                        <div class="icon">
                                            <i class="icon-tree"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Global Outreach</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="link-wrap">
                                <a href="/about" class="read-more-link">Read More <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Meet Member Section End Here -->

    <!-- Strenth Section Start Here -->
    <div class="strenth-section-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title">
                        <div class="subtitle wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>Leadership Insights</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Guided by Grace, Led by the Spirit
                        </h4>
                        <p class="description text-center wow animate__animated animate__fadeInUp">Discover the
                            spiritual pillars taught and exemplified by Apostle Geoffrey J. Mboga, co-leader of Agape
                            Temple Global Ministry.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-8">
                    <div class="middle-item">
                        <div class="senatory-logo" style="background-image: url(assets/img/preloader.png);">
                            <div class="strenth-img" style="background-image: url(assets/img/pstchurch.png);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 order-md-first">
                    <div class="strenth-single-items style-01 wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Kingdom Leadership</h6>
                            <div class="icon">
                                <span class="number">01</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">Apostle Geoffrey empowers believers to rise in leadership with humility,
                            wisdom, and divine authority.</p>
                    </div>
                    <div class="strenth-single-items wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Apostolic Teaching</h6>
                            <div class="icon">
                                <span class="number">03</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">He delivers sound, Spirit-filled teaching rooted in the Apostolic
                            foundation of Christ and the Scriptures.</p>
                    </div>
                    <div class="strenth-single-items wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Holy Spirit Fire</h6>
                            <div class="icon">
                                <span class="number">05</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">Anointed to lead revival and ignite hearts with the fire and gifts of
                            the Holy Spirit.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="strenth-single-items style-01 home-three wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Prophetic Vision</h6>
                            <div class="icon">
                                <span class="number">02</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">He speaks life, destiny, and direction over nations and individuals
                            through prophetic insight.</p>
                    </div>
                    <div class="strenth-single-items wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Global Missions</h6>
                            <div class="icon">
                                <span class="number">04</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">Leading evangelistic efforts in Africa and Europe, touching lives across
                            nations with the Gospel.</p>
                    </div>
                    <div class="strenth-single-items wow animate__animated animate__fadeInUp">
                        <div class="content">
                            <h6 class="title">Faith & Family</h6>
                            <div class="icon">
                                <span class="number">06</span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <p class="description">Apostle Geoffrey champions unity, integrity, and godly values in both
                            family and ministry life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Strenth Section End Here -->

    <!-- Youth Leader Section Start Here -->
    <div class="youth-leader-section youth-bg" style="background-image: url(/assets/img/youth.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title">
                        <div class="subtitle wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>Youth Ministry</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Raising a Bold Generation for Christ
                        </h4>
                    </div>
                    <div class="btn-wrapper">
                        <a href="/contact" class="boxed-btn btn-sanatory">Join the Youth Movement <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Youth Leader Section End Here -->

    <!-- Donation Section Start -->
    <div class="donation-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="party-single-item margin-bottom-50">
                        <div class="content">
                            <div class="subtitle wow animate__animated animate__fadeInUp">
                                <p>Support the Mission</p>
                                <div class="icon">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h4 class="title style-01 wow animate__animated animate__fadeInUp">Give to Expand God's
                                Kingdom</h4>
                            <p class="description style-01 wow animate__animated animate__fadeInUp">
                                Your generous giving enables us to spread the Gospel, support communities in need, and
                                empower ministries across Kenya, the Netherlands, and beyond. Together, we are building
                                lives and transforming nations through Christ.
                            </p>
                        </div>
                        <div class="btn-wrapper margin-top-35 wow animate__animated animate__fadeInUp">
                            <a href="/donation" class="price-btn">$25</a>
                            <a href="/donation" class="price-btn">$50</a>
                            <a href="/donation" class="price-btn">$100</a>
                            <a href="/donation" class="boxed-btn donate-btn btn-sanatory">Donate Now <i
                                    class="fas fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-bg" style="background-image: url(assets/img/Asset-01.png)">
                        <div class="donate-bg-02" style="background-image: url(assets/img/donation.png)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Section End -->



    <!-- Church Gallery Section Start Here -->
    <div class="political-gallery-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title">
                        <div class="subtitle wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>Our Gallery</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Moments from Our Ministry</h4>
                    </div>
                </div>
            </div>
            <div class="political-gallery-item">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="gallery-single-items wow animate__animated animate__fadeInLeft">
                                    <div class="thumb">
                                        <img src="assets/img/GALLERY 1.jpg" alt="Worship moment">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/GALLERY 1.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div
                                    class="gallery-single-items wow animate__animated animate__fadeInLeft animate__delay-1s">
                                    <div class="thumb">
                                        <img src="assets/img/GALLERY 2.jpg" alt="Group Fellowship">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/GALLERY 2.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Image -->
                            <div class="col-lg-12 col-md-6">
                                <div
                                    class="gallery-single-items wow animate__animated animate__fadeInLeft animate__delay-2s">
                                    <div class="thumb">
                                        <img src="assets/img/new2.jpg" alt="New Ministry Moment">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/new2.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Center Column -->
                    <div class="col-lg-6">
                        <div class="gallery-single-items wow animate__animated animate__fadeInUp">
                            <div class="thumb">
                                <img src="assets/img/poster.jpg" alt="Youth Ministry">
                                <div class="cart-icon">
                                    <a class="image-popup" href="assets/img/poster.jpg"><i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h6 class="title">AGAPE TEMPLE — Empowered to Serve</h6>
                            </div>
                        </div>
                        <!-- New Center Image -->
                        <div
                            class="gallery-single-items wow animate__animated animate__fadeInUp animate__delay-1s mt-3">
                            <div class="thumb">
                                <img src="assets/img/new3.jpg" alt="Ministry Impact">
                                <div class="cart-icon">
                                    <a class="image-popup" href="assets/img/new3.jpg"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="gallery-single-items wow animate__animated animate__fadeInRight">
                                    <div class="thumb">
                                        <img src="assets/img/new1.jpg" alt="Church family selfie">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/GALLERY 3.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div
                                    class="gallery-single-items wow animate__animated animate__fadeInRight animate__delay-1s">
                                    <div class="thumb">
                                        <img src="assets/img/GALLERY 4.jpg" alt="Women's Ministry Outreach">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/GALLERY 4.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Image -->
                            <div class="col-lg-12 col-md-6">
                                <div
                                    class="gallery-single-items wow animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="thumb">
                                        <img src="assets/img/new4.jpg" alt="Joyful Celebration">
                                        <div class="cart-icon">
                                            <a class="image-popup" href="assets/img/new4.jpg"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Right Column -->
                </div>
            </div>
        </div>
    </div>

    <!-- Church Gallery Section End Here -->








    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;
        let isTransitioning = false;

        // Start auto-play immediately when page loads
        let autoPlayInterval;

        function initCarousel() {
            // Ensure first slide is visible
            showSlide(0);
            // Start auto-play after 2 seconds
            setTimeout(() => {
                autoPlayInterval = setInterval(nextSlide, 4000); // Changed to 4 seconds
            }, 2000);
        }

        function showSlide(index) {
            if (isTransitioning) return;
            isTransitioning = true;

            // Update indicators immediately
            indicators.forEach((indicator, i) => {
                if (i === index) {
                    indicator.style.background = 'white';
                    indicator.style.opacity = '1';
                    indicator.style.transform = 'scale(1.2)';
                    indicator.classList.add('active');
                } else {
                    indicator.style.background = 'transparent';
                    indicator.style.opacity = '0.7';
                    indicator.style.transform = 'scale(1)';
                    indicator.classList.remove('active');
                }
            });

            // Update slides
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.opacity = '1';
                    slide.classList.add('active');
                } else {
                    slide.style.opacity = '0';
                    slide.classList.remove('active');
                }
            });

            // Reset transition flag
            setTimeout(() => {
                isTransitioning = false;
            }, 800);
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            if (isTransitioning || currentSlide === index) return;
            currentSlide = index;
            showSlide(currentSlide);
            // Reset auto-play timer
            clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(nextSlide, 4000);
        }

        // Initialize carousel when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initCarousel);
        } else {
            initCarousel();
        }

        // Pause auto-play on hover (optional)
        document.querySelector('.header-area').addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        document.querySelector('.header-area').addEventListener('mouseleave', () => {
            clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(nextSlide, 4000);
        });

        // Enhanced hover effects for navigation buttons
        document.querySelectorAll('.carousel-nav').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255,255,255,0.3)';
                this.style.borderColor = 'rgba(255,255,255,0.9)';
                this.style.transform = this.classList.contains('prev') ? 'translateY(-50%) scale(1.15)' :
                    'translateY(-50%) scale(1.15)';
                this.style.boxShadow = '0 8px 25px rgba(255,255,255,0.2)';
            });

            btn.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(255,255,255,0.15)';
                this.style.borderColor = 'rgba(255,255,255,0.6)';
                this.style.transform = 'translateY(-50%) scale(1)';
                this.style.boxShadow = 'none';
            });
        });

        // Enhanced hover effects for main button
        const mainBtn = document.querySelector('.boxed-btn');
        if (mainBtn) {
            mainBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
                this.style.boxShadow = '0 10px 30px rgba(255,107,53,0.6)';
                const icon = this.querySelector('i');
                const overlay = this.querySelector('div');
                if (icon) icon.style.transform = 'translateX(5px)';
                if (overlay) overlay.style.left = '0';
            });

            mainBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 6px 20px rgba(255,107,53,0.4)';
                const icon = this.querySelector('i');
                const overlay = this.querySelector('div');
                if (icon) icon.style.transform = 'translateX(0)';
                if (overlay) overlay.style.left = '-100%';
            });
        }

        // Enhanced hover effects for video button
        const videoBtn = document.querySelector('.video-play');
        if (videoBtn) {
            videoBtn.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255,255,255,0.2)';
                this.style.transform = 'translateY(-3px) scale(1.05)';
                this.style.borderColor = 'rgba(255,255,255,1)';
                const playIcon = this.querySelector('.play-icon');
                if (playIcon) {
                    playIcon.style.transform = 'scale(1.1)';
                    playIcon.style.boxShadow = '0 6px 20px rgba(255,255,255,0.4)';
                }
            });

            videoBtn.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(255,255,255,0.1)';
                this.style.transform = 'translateY(0) scale(1)';
                this.style.borderColor = 'rgba(255,255,255,0.8)';
                const playIcon = this.querySelector('.play-icon');
                if (playIcon) {
                    playIcon.style.transform = 'scale(1)';
                    playIcon.style.boxShadow = '0 4px 15px rgba(255,255,255,0.3)';
                }
            });
        }

        // Indicator hover effects
        document.querySelectorAll('.indicator').forEach(indicator => {
            indicator.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    this.style.opacity = '1';
                    this.style.transform = 'scale(1.1)';
                }
            });

            indicator.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.opacity = '0.7';
                    this.style.transform = 'scale(1)';
                }
            });
        });
    </script>


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
    <!-- slick carousel -->
    <script src="assets/js/slick.min.js"></script>
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
