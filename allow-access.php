<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pora - Login DB</title>
    <meta name="description" content="Accessing the waitlist in excel format">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pora - Export DB">
    <meta name="twitter:description" content="Accessing the waitlist in excel format">
    <meta name="twitter:image" content="./images/blog.jpg">

    <meta property="og:title" content="Pora - Export DB">
    <meta property="og:url" content="forward.anakle.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./images/blog.jpg">
    <meta property="og:description" content="Accessing the waitlist in excel format">
    
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
    <section id="about" class="py-md-0 py-3" style="min-height: 85vh;">
        <header style="position: relative; padding-top: 25px; margin-bottom: 2rem;">
            <div class="container">
                <div id="logo" class="d-flex justify-content-start">
                    <a href="index.php">
                        <img src="images/logo-newest.png" alt="PORA Logo" />
                    </a>
                </div>
            </div>
        </header>
        <div class="container">
        	<div class="about-text col-12 col-sm-6 p-4 mb-4 mb-md-0 ml-auto mr-auto animate__animated animate__zoomInUp animate__slower">
	        	<div class="d-flex flex-column align-items-center justify-content-around mb-4">
					<h2>Login</h2>
                    <div class="col-12 col-md-8 pl-0">
                        <!-- <form action="<?php //echo $_SERVER["PHP_SELF"]; ?>" method="post"> -->
                        <form action="inc/authenticate.php" method="post">
                            <div class="col col-12 md-form p-0 mb-1">
                                <span id="userEmail-info" class="info"></span><br />
                                <input type="email" name="userEmail" id="userEmail" class="demoInputBox" />
                                <label for="userEmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Address</label>
                            </div>

                            <div class="col col-12 md-form p-0">
                                <span id="userPassword-info" class="info"></span><br />
                                <input type="password" name="userPassword" id="userPassword" class="demoInputBox" />
                                <label for="userPassword"><i class="fa fa-lock" aria-hidden="true"></i> Password </label>
                            </div>

                            <div class="col-12 form-submit p-0">
                                <button name="submit" class="btn btn-block" id="submit">
                                    Log In<span></span><span></span><span></span><span></span>
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

    <section id="kente" class="py-md-0">
        <img style="width: 100%;" src="images/kente-new.png" alt="PORA Kente" />
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

</body>

</html>