<?php
ob_start();
session_start();
?>
<!DOCTYPE html> 
<html lang="en">
	
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>
		
		
		<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">
		
		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		
		<link rel="stylesheet" href="assets/css/style.css">
		
	</head>
	<body>

		
		<div class="main-wrapper">
		
			
				<?php include("header.php") ?>

			<section class="section section-search" style="height: 80vh ;">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Choose Doctor, Make an Appointment</h1>
							<p>Discover the best Doctors nearest to you.</p>
						</div>
                         
						<div class="text-center login-link">
							<a href="whologin.php" class="btn btn-primary btn-lg px-5 mt-5">Login / Signup</a>

						</div>
						
					</div>
				</div>
			</section>

			  
			
		   
	   </div>

		<script src="assets/js/jquery.min.js"></script>
		

		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		

		<script src="assets/js/slick.js"></script>
		

		<script src="assets/js/script.js"></script>
		
	</body>

</html>
<?php
 ob_end_flush();
?>