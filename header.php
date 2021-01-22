<!doctype html>
<html lang="zxx">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Owl Magnific CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Animate CSS --> 
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Boxicons CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/agency/favicon.png">
		<!-- Title -->
		<title>Join TAAP Consultants</title>
    </head>

    <body>

		<!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg personal-navbar">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="assets/img/consulting/logo.jpg" alt="image">
				</a>
 
				<button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
 
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
                        <li class="nav-item">
                        	<?php
						if(isset($_SESSION['user_id'])){ ?>
						<a class="nav-link" href="logout.php">Logout</a>
                        <?php } else{	?>
							<a class="nav-link" href="index.php">Back Home</a>
						<?php } ?>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar Area -->