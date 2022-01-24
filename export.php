<?php
 
	include_once("inc/config.php");
	include("inc/excel.php"); 

	// We need to use sessions, so you should always start sessions using the below code.
	session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
		header('Location: allow-access.php');
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pora - Export DB</title>
    <meta name="description" content="Exporting the waitlist in excel format">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pora - Export DB">
    <meta name="twitter:description" content="Exporting the waitlist in excel format">
    <meta name="twitter:image" content="./images/blog.jpg">

    <meta property="og:title" content="Pora - Export DB">
    <meta property="og:url" content="forward.anakle.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./images/blog.jpg">
    <meta property="og:description" content="Exporting the waitlist in excel format">
    
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
    <section id="about" class="py-md-0 py-3" style="min-height: 96.9vh;">
        <header style="position: relative; padding-top: 25px; margin-bottom: 2rem;">
            <div class="container">
            	<div class="d-flex flex-nowrap justify-content-between align-items-center">
	                <div id="logo" class="d-flex justify-content-start">
	                    <a href="index.php">
	                        <img src="images/logo-newest.png" alt="PORA Logo" />
	                    </a>
	            	</div>
	            	<a style="color: #000;" href="inc/logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                </div>
            </div>
        </header>
        <div class="container pb-5">
        	<div class="about-text col-12 p-4 animate__animated animate__fadeInUp animate__slower">
	        	<div class="d-flex align-items-center justify-content-between mb-4">
	        		<div>
						<h2>Welcome <?=$_SESSION['name']?>!</h2>
						<p>Use the export button below to download the waitlist in excel data format</p>
	        		</div>
					<div class="col-3 p-0 text-right">
						<div class="btn-group">	
							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
								<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-block">
									Export To Excel<span></span><span></span><span></span><span></span>
								</button>
							</form>
						</div>
					</div>	
				</div>			  
				<table id="waiters" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th style="background: #c85961;color: #fff;font-size: 1.1rem; font-weight: bold;">S/N</th>
							<th style="background: #c85961;color: #fff;font-size: 1.1rem; font-weight: bold;">Email Address</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($waitersData as $waiter) { ?>
						   <tr>
						   <td><?php echo $waiter ['id']; ?></td>
						   <td><?php echo $waiter ['email']; ?></td>   
						   </tr>
						<?php } ?>
					</tbody>
			    </table>
				<div class="col-12 p-0 text-right">
					<div class="btn-group">	
						<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
							<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-block">
								Export To Excel<span></span><span></span><span></span><span></span>
							</button>
						</form>
					</div>
				</div>
            </div>
        </div>
    </section>

    <section id="kente" class="py-md-0">
        <img style="width: 100%;" src="images/kente-new.png" alt="PORA Kente" />
    </section>

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