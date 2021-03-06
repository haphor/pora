<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pora</title>
    <meta name="description" content="The dating & social app for Africans in the diaspora">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pora">
    <meta name="twitter:description" content="The dating & social app for Africans in the diaspora">
    <meta name="twitter:image" content="./images/blog.jpg">

    <meta property="og:title" content="Pora">
    <meta property="og:url" content="forward.anakle.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./images/blog.jpg">
    <meta property="og:description" content="The dating & social app for Africans in the diaspora">
    
    <!--Favicon-->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    
    <!-- Font Awesome-->
    <link href="font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Core CSS-->
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css" media="screen,projection" />
    
    <!-- Material Design Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="./css/mdb.min.css" media="screen,projection" />
    
    <!-- My Animations CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <!-- My custom CSS -->
    <link type="text/css" rel="stylesheet" href="./css/style.css" media="screen,projection" />
</head>

<body>
    <div class="d-md-flex flex-column-reverse">
        <section id="header">
            <header class="static">
                <div class="container">
                    <div id="logo" class="d-flex justify-content-start">
                        <a href="#">
                            <img src="images/logo-newest.png" alt="PORA Logo" />
                        </a>
                    </div>
                </div>
            </header>

            <section id="banner" class="d-flex justofy-content-start">
                <div class="container">
                    <div class="mobile-push d-flex align-items-center h-100">
                        <div class="d-flex flex-column items-justified-left col-12 col-md-5">
                            <h1 class="animate__animated animate__fadeInDownBig animate__slow mb-4">
                                Find love that blooms and friendships that stand the test of time.
                            </h1>
                            <p style="max-width: 100%;width: 350px;font-size: 1rem;margin-bottom: 5px;" class="pl-2 animate__animated animate__shakeX animate__slow animate__delay-2s animate__infinite">
                                Join the waitlist to enjoy all of Pora's premium features for free for 30 days!
                            </p>
                            <div class="col-12 col-md-8 pl-0 animate__animated animate__zoomInUp animate__slower animate__delay-2s">
                                <form action="javascript:void(0)" method="post" id="wait-form">
                                    <div class="col col-12 md-form p-0">
                                        <span id="userEmail-info" class="info"></span><br />
                                        <input type="email" name="userEmail" id="userEmail" class="demoInputBox" />
                                        <label for="userEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Address</label>
                                    </div>

                                    <div class="col-12 form-submit p-0">
                                        <button name="submit" class="btn btn-block" id="submit">
                                            Join<span></span><span></span><span></span><span></span>
                                        </button>
                                    </div>
                                </form>
                                <span id="error" style="display: none"></span>
                                <div id="show_message" style="display: none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="countdown" class="py-3 py-md-0">
            <div class="container">
                <div class="d-flex flex-md-row flex-column justify-content-around content-align-center align-items-center">
                    <marquee behavior="alternate" style="width: 500px;max-width: 100%;margin-left: auto;margin-right: auto;"><p>Launching soon...</p></marquee>
                    <div style="display: none;">
                        <p>Launching on Valentines Day 2022!</p>
                        <div id="launch_countdown"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="about" class="py-md-0 py-3">
        <div class="container">
            <div class="d-md-flex justify-content-around align-items-center align-content-center py-2 py-md-5">
                <div class="about-image col-12 col-md-6 px-0 py-md-5 pb-1 animate__animated animate__heartBeat animate__slower animate__repeat-2">
                    <img src="images/about-image.png" alt="About PORA section image" />
                </div>
                <div class="about-text col-12 col-md-4 p-4 mb-4 mb-md-0">
                    <h2 class="mb-3">About PORA</h2>
                    <p>
                        Pora is a dating and friendship community for single Africans within the age range of 25 - 60+ in the diaspora. Meet thousands of like-minded African singles wherever you are in the world and connect at lightning speed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="kente" class="py-md-0">
        <img style="width: 100%;" src="images/kente-new.png" alt="PORA Kente" />
    </section>

    <section id="avatar" class="py-5">
        <div class="d-flex justify-content-between col-12 p-0">
            <div class="hover-zoomin animate__animated animate__rotateIn">
                <img src="images/avatar-1.png" alt="Single Africans" class="half-img " />
            </div>
            <div class="hover-zoomin animate__animated animate__zoomIn">
                <img src="images/avatar-2.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__jackInTheBox">
                <img src="images/avatar-3-3-3.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__rotateIn animate__delay-1s">
                <img src="images/avatar-4.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__zoomIn animate__delay-1s">
                <img src="images/avatar-5-5.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__jackInTheBox animate__delay-1s">
                <img src="images/avatar-6.png" alt="Single Africans" class="last-img" />
            </div>
        </div>
        <div class="d-flex justify-content-between col-12 p-0">
            <div class="hover-zoomin animate__animated animate__rotateIn animate__delay-2s">
                <img src="images/avatar-7-7-7.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__zoomIn animate__delay-2s">
                <img src="images/avatar-8.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__jackInTheBox animate__delay-2s">
                <img src="images/avatar-9-9.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__rotateIn animate__delay-3s">
                <img src="images/avatar-10.png" alt="Single Africans" />
            </div>
            <div class="hover-zoomin animate__animated animate__rotateIn animate__delay-3s">
                <img src="images/avatar-11.png" alt="Single Africans" />
            </div>
        </div>
    </section>

    <section id="singles" class="py-5">
        <div class="container">
            <div class="single-content d-flex flex-column justify-content-center align-items-center">
                <h2>Who is PORA for?</h2>
                <p class="text-center">If you???re looking to broaden your social circle, find love, and form powerful, long-lasting friendships/partnerships, Pora is a great place to start.
                </p>
                <p class="text-center">
                    In just a few clicks, we connect you to an entire community of fellow seekers - near and far- who share your unique interests and values and vibe on the same frequency level as you.
                </p>
            </div>
        </div>
    </section>

    <section id="animation">
        <div class="container">
            <div class="iframe-container d-flex align-items-center justify-content-around">
                <iframe width="560" height="314" src="https://www.youtube.com/embed/5yKJXAucbVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="works" class="py-5">
        <div class="container">
            <h2 class="text-center mb-md-5 mb-2">How PORA works</h2>
            <div class="works-content d-flex flex-column align-items-center">
                <div class="work-item d-flex flex-column align-items-start col-12 col-md-4 offset-md-6 hover-zoomin animate__animated animate__fadeInTopRight p-4 mb-4">
                    <img src="images/profile.svg" alt="Profile icon" />
                    <h4>Add your free profile</h4>
                    <p>
                        Begin your journey to great companionship. Sign up, verify your account and answer a series of interesting questions intended to sort your preferences and help personalize your experience.
                    </p>
                </div>
                <div class="work-item d-flex flex-column align-items-start col-12 col-md-4 offset-md-6 hover-zoomin animate__animated animate__fadeInRightBig animate__delay-1s p-4 mb-4">
                    <img src="images/find.svg" alt="Find icon" />
                    <h4>Find your match</h4>
                    <p>
                        The app uses a sophisticated algorithm to help you discover unique matches based on your interests. You have a chance to connect with someone from your nationality or ethnicity.
                    </p>
                </div>
                <div class="work-item d-flex flex-column align-items-start col-12 col-md-4 offset-md-6 hover-zoomin animate__animated animate__zoomInRight animate__delay-2s p-4 mb-4">
                    <img src="images/profile.svg" alt="Plan icon" />
                    <h4>Choose a Plan</h4>
                    <p>
                        Pora is based on a freemium model, which offers basic features for free. Within a 3 months period, we hope you would have found your spark and established a lifetime connection.
                    </p>
                </div>
                <div class="work-item d-flex flex-column align-items-start col-12 col-md-4 offset-md-6 hover-zoomin animate__animated animate__fadeInBottomRight animate__delay-3s p-4 mb-4">
                    <img src="images/secure.svg" alt="Secure icon" />
                    <h4>Communicate Securely</h4>
                    <p>
                        We???ve put in place internal review protocols, and high-level encryption to ensure you interact securely with others in the community. So, go on and kick-start a conversation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="py-5">
        <div class="container">
            <div class="d-md-flex flex-column align-items-end download-content py-5">
                <div class="download-img col-12 col-md-6">
                    <img src="images/download-image-new.png" alt="Download image">
                </div>
                <div class="download-text col-12 py-4 py-md-5 px-md-5 px-3">
                    <div class="download-text-inner d-flex flex-column align-items-start col-12 col-md-5 py-sm-4 pl-sm-5 pr-sm-0">
                        <!-- <h2>Find love today!</h2> -->
                        <h2>Your search ends here!</h2>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra scelerisque.
                        </p> -->
                        <div class="download-cta d-flex justify-content-between col-10 p-0 animate__animated animate__pulse animate__delay-2s animate__infinite">
                            <div class="col-6 pl-0">
                                <a href="#banner">
                                    <img src="images/google.png" alt="Google playstore image">
                                </a>
                            </div>
                            <div class="col-6 pr-0">
                                <a href="#banner">
                                    <img src="images/app.png" alt="Appstore image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <section id="join" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-10 col-sm-8 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <h3 style="color: #280E06;">Join the Waitlist</h3>
                    <p style="max-width: 100%;width: 250px;text-align: center;">Enjoy all of Pora's premium features for free for 30 days!</p>
                    <div class="join-footer-form">
                        <form action="javascript:void(0)" method="post" id="join-form">
                            <div class="d-flex align-items-center">
                                <div class="md-form mb-2">    
                                    <span id="footerUserEmail-info" class="info"></span><br />
                                    <input type="email" name="userEmail" id="footerUserEmail" class="demoInputBox" />
                                    <label for="footerUserEmail">Enter your Email Address</label>
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-theme px-4" type="submit">
                                        Join<span></span><span></span><span></span><span></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <span id="footer_error" style="display: none"></span>
                        <div id="footer_show_message" style="display: none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3">
        <div class="container">
            <div class="d-md-flex flex-row align-items-center justify-content-between">
                <div id="footer-logo">
                    <a href="#">
                        <img src="images/logo.png" alt="PORA Logo" />
                    </a>
                </div>
                <ul class="footer-social-links col-sm-3 p-0 d-flex flex-row flex-wrap justify-content-between align-items-center m-0">
                    <li>Follow us on:</li>
                    <li><a href="https://www.instagram.com/getpora/" target="_blank"><i class="fa fa-3 fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="vr"><span></span></li>
                    <li><a href="https://twitter.com/getpora/" target="_blank"><i class="fa fa-3 fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li class="vr"><span></span></li>
                    <li><a href="https://www.facebook.com/GetPora/" target="_blank"><i class="fa fa-3 fa-facebook-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!--jQuery first-->
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <!-- jQuery Ui -->
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <!-- jQuery migrate -->
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <!-- Material Design Bootstrap Javascript -->
    <script type="text/javascript" src="./js/mdb.min.js"></script>
    <!-- custom Javascript -->
    <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>