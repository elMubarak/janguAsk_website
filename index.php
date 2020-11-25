<?php require 'jangu.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JanguAsk</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/plugins/dimon-icons/style.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />
    <script src="countdowntimer.js"></script>
    <script src="script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body>
    <div class="preloader">
        <img src="assets/images/resources/preloader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/resources/icon.svg" class="main-logo" width="70" height="70"
                                alt="Awesome Image" />
                        </a><span
                            style="color: grey;font-size: 38px; padding-left: 25px;font-weight: bold;">Jangu</span><span
                            style="font-size: 38px;color: orange;font-weight: bold;padding-right:20px;">Ask</span>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" one-page-scroll-menu navigation-box">
                            <li class="current scrollToLink">
                                <a href="#banner">Home</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#features">Features</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#about">About</a>

                            </li>
                            <li class="scrollToLink">
                                <a href="#screenshots">Screenshots</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <section class="banner-one" id="banner">
            <span class="banner-one__shape-2"></span>
            <span class="banner-one__shape-3"></span>
            <span class="banner-one__shape-4"></span>
            <div class="container">
                <div class="banner-one__moc">
                    <img src="assets/images/mocs/mocsx.png" alt="Awesome Image" />
                </div><!-- /.banner-one__moc -->
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-one__content">
                            <h6 class="banner-one__title">Amplify your knowledge <br>with <span
                                    style="color: grey;font-size: 58px; font-weight: bold;">Jangu</span><span
                                    style="font-size: 58px;color: orange;font-weight: bold;">Ask</span></h6>
                            <!-- /.banner-one__title -->
                            <!-- Display the countdown timer in an element -->
                            <p class="banner-one__text" style="text-align: justify;">JanguAsk is a platform where users
                                can ask question(s) regarding any subject or field of study and get rich answer(s) from
                                a knowledgeable community. Users can also share educational videos & take multiple
                                choice test/quizes in their subjects of study.</p>
                            <!-- /.banner-one__text -->
                            <!-- <a href="redirector.php" class="banner-one__btn thm-btn "><span>Get Started</span></a>
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
         <!-- Coundown Section Start -->
        <section class="fact-one">
            <div class="container">
                <div class="block-title text-center">
                    <h6 class="block-title__titleJangu"><span
                            style="color: grey;font-size: 58px; font-weight: bold;">WE ARE LAUNCHING SOON...</span>
                    </h6><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter" id='days'>4789</h3>
                                <p class="fact-one__text">DAYS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter" id='hours'>6400</h3>
                                <p class="fact-one__text">HOURS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter" id='minutes'>960</h3>
                                <p class="fact-one__text">MINUTES</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter" id='seconds'>378</h3>
                                <p class="fact-one__text">SECONDS</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
    <!-- Coundown Section End -->
        <section class="service-one" id="features">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Features.</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-human-resources"></i>
                                <h3><a href="#"><span style="color: orange;">Powerful </span>Community</a></h3>
                                <p style="text-align: justify;">JanguAsk is a diverse community where everyone can learn
                                    something or contribute their knowledge towards helping someone learn.</p>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-presentation"></i>
                                <h3><a href="#"><span style="color: orange;">Discussions</span> Forum</a></h3>
                                <p style="text-align: justify;">Being a social learning app, JanguAsk gives users the
                                    ability to start discussions on diverse subjects in the discussion section of the
                                    App.
                                    Such discussions get applauds, and comments from fellow users and the community.</p>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-target"></i>
                                <h3><a href="#"> <span style="color: orange;">Quiz</span> Bank</a></h3>
                                <p style="text-align: justify;">JanguAsk gives you a repository of quizzes & question
                                    from many professional examinations to test yourself. You can also contribute to the
                                    community by depositing questions and quizzes from past examinations.</p>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1500ms">
                        <div class="service-one__single text-center">
                            <div class="service-one__inner">
                                <i class="service-one__icon dimon-icon-visualization"></i>
                                <h3><a href="#"><span style="color: orange;">Educative</span> Videos</a></h3>
                                <p style="text-align: justify;">On JanguAsk you can share knowledge by posting
                                    educational video on any subject or field of your interest.</p>
                            </div><!-- /.service-one__inner -->
                        </div><!-- /.service-one__single -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->
        <!-- <section class="video-one" id="video"> -->
            <!-- <img src="assets/images/background/video-one-bg.png" alt="Awesome Image" class="video-one__bg" />
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="video-one__box ">
                    <video width="1141" height="580" controls="true" autoplay="true">
                        <source src="assets/images/resources/vid.mp4" type="video/mp4">
                    </video> -->
                <!-- </div>
            </div>
        </section> -->

        <section class="cta-one" id="about">
            <img src="assets/images/background/cta-one-bg.png" class="cta-one__bg" alt="Awesome Image" />
            <div class="container justify-content-lg-center">
                <img src="assets/images/mocs/mocsx.png" class="cta-one__moc" alt="Awesome Image" />
                <div class="row justify-content-lg-end">
                    <div class="col-lg-6">
                        <div class="cta-one__content">
                            <i class="cta-one__icon dimon-icon-data1"></i>
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Additional <span style="color: orange">features</span>
                                </h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->

                            <div class="cta-one__text">
                                <p>Explore, Learn & Play with <span
                                        style="color: grey;font-size: 28px; font-weight: bold;">Jangu</span><span
                                        style="font-size: 28px;color: orange;font-weight: bold;">Ask</span></p>
                            </div><!-- /.cta-one__text -->
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>With JanguAsk you can make academic post(s) or ask
                                    question(s) in any subject or field at secondary, tertiary levels of education. You
                                    can do that by simply selecting your level of education & subject/field to post
                                    question(s) for discussions.</li>
                                <li><i class="fa fa-check"></i>Users can appluad and comment on your post(s), leaving
                                    you & the community better informed.</li>
                                <li><i class="fa fa-check"></i>By following a user on JanguAsk, you can get their latest
                                    academic post(s) & activities.</li>
                            </ul><!-- /.list-unstyled -->
                            <a href="redirector.php" class="thm-btn"><span>Get Started</span></a>
                        </div><!-- /.cta-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
        <section class="cta-two">
            <div class="container">
                <img src="assets/images/jangu/bgSplash.svg" class="cta-two__moc" alt="Awesome Image" />
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-two__content">
                            <i class="cta-two__icon dimon-icon-data"></i>
                            <div class="block-title text-left">
                                <h2 class="block-title__title">The social learning app for<span style="color: orange">
                                        EVERYONE</span>
                                </h2>
                                <!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="cta-two__text">
                                <p>Whether you are an expert in your field, or you are a student in formal education at
                                    any level, or you are a life-long learner, this app is for you.</p>
                                <p>On this platform, their are experts in their fields who answer your questions and
                                    contribute richly to discussions.You can also get answers and responses to your
                                    questions from peers.</p>
                            </div><!-- /.cta-two__text -->
                            <a href="redirector.php" class="thm-btn"><span>Get Started</span></a>
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->
        <!-- <p id="demotimer"></p> -->
        <section class="fact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">789</h3>
                                <p class="fact-one__text">Exams Questions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">100</h3>
                                <p class="fact-one__text">Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">960</h3>
                                <p class="fact-one__text">Subjects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="fact-one__single">
                            <div class="fact-one__inner">
                                <h3 class="fact-one__count counter">2234</h3>
                                <p class="fact-one__text">Schools</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
        <section class="app-shot-one" id="screenshots">
            <img src="assets/images/background/app-shot-bg.png" alt="Awesome Image" class="app-shot-one__bg" />
            <div class="container-fluid">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Take a glimpse of<br> <span
                            style="color: grey;font-size: 58px; font-weight: bold;">Jangu</span><span
                            style="font-size: 58px;color: orange;font-weight: bold;">Ask</span>
                    </h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="app-shot-one__carousel owl-theme owl-carousel">
                    <div class="item">
                        <img src="assets/images/app-shots/s3.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s5.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s1.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s4.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s2.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s3.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s5.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s1.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s4.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/app-shots/s2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/images/app-shots/s6.jpg" alt="">
                    </div><<!-- /.item -->
                </div><!-- /.app-shot-one__carousel owl-theme owl-carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.app-shot-one -->
        <section class="faq-one">
            <img src="assets/images/background/faq-one-bg.png" alt="Awesome Image" class="faq-one__bg" />
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Send us <span style="color: orange">feedback</span> </h2>
                    <form method="POST" class="reply-form">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" name="senderName" placeholder="Your name" class="reply-form__field" id="name"
                                    required />
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-4">
                                <input type="text" name="senderEmail" placeholder="Enter email" class="reply-form__field" id="email"
                                    required />
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-4">
                                <input type="text" name="subject" placeholder="Subject" class="reply-form__field" id="subject"
                                    required />
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Write message" class="reply-form__field" id="message"
                                    required /></textarea>
                                <button class="reply-form__btn thm-btn" type="submit" name='sendmail'><span>Send
                                    </span></button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.reply-form -->
                    <!-- /.block-title__title -->
                </div><!-- /.block-title -->
            </div><!-- /.container -->
        </section><!-- /.faq-one -->
        <section class="mailchimp-one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Subscribe Our <span>Newsletter</span> <br> to Get New Updates.</h2>
                    <!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="container">
                    <form method='POST' class="reply-form ">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" name="subscriberName" placeholder="Your name" class="reply-form__field" id="name"
                                    required />
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-4">
                                <input type="text" name="subscriberEmail" placeholder="Enter email" class="reply-form__field" id="email"
                                    required />
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-4">
                            <button style="height: 70px;" class="reply-form__btn thm-btn" type="submit" name='subscribe-btn'>
                                <span>Subscribe</span>
                            </button>
                        </div>
                        </div>
                </form><!-- /.mailchimp-one__mc-form -->
                </div>
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget__about">
                                <img src="assets/images/jangu/janguLogo.svg" width="119" alt=""
                                    class="footer-widget__logo"><span
                                    style="color: grey;font-size: 38px; font-weight: bold;">Jangu</span><span
                                    style="font-size: 38px;color: orange;font-weight: bold;">Ask</span>
                                <p class="footer-widget__contact"><a href="tel:888-666-0000">0815-776-6290 (SMS)</a></p>
                                <!-- /.footer-widget__contact -->
                                <p class="footer-widget__contact"><a
                                        href="mailto:support@janguask.com">contact@janguask.com</a>
                                <p class="footer-widget__contact">No 7 Wali Road, Pantami, <br> Gombe-State, Nigeria.</p>
                                <!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title" style="color:grey;font-size:18px;">What are you waiting for? Get your <span
                                        style="color: grey;font-size: 18px; font-weight: bold;">Jangu</span><span
                                        style="font-size: 18px;color: orange;font-weight: bold;">Ask</span>.<p><br>Start non-stop learning today, anywhere, anytime.</h3>
                                <div class="row text-center">
                                    <a href="redirector.php">
                                    <div class="site-footer__social">
                                        <img src="assets/images/playstore-button.png" sizes="50px" height="70" width="150">
                                    </div>
                                </a>
                                <br>
                                <a href="redirector.php">
                                    <div class="site-footer__social">
                                        <img src="assets/images/appstore-button.png" izes="50px" height="70" width="150">
                                    </div><!-- /.site-footer__social -->
                                </a>
                                </div>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3" style="margin-left: 20px">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Follow us on</h3>
                                <div class="site-footer__social">
                                    <a href="https://faceboo.com/janguask" class="fa fa-facebook-square"></a>
                                    <a href="https://twitter.com/janguask" class="fa fa-twitter"></a>
                                    <a href="https://instagram.com/janguask" class="fa fa-instagram"></a>
                                    <a href="https://youtube.com/janguask" class="fa fa-youtube"></a>
                                </div><!-- /.site-footer__social -->
                                <p>
                                <a href="terms.php">Terms & Conditions</a>
                                <br>
                                <a href="privacy.php">Privacy & Policy</a>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container text-center">
                        <p class="site-footer__copy">&copy; copyright 2020 <a
                                href="www.janguask.com">JanguAsk</a></p>
                        <!-- /.site-footer__copy -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->


    <a href="redirector.php" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
   <script src="assets/swal2/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>

</html>