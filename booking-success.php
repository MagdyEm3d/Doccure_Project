<?php
ob_start();
session_start();
include("conn.php");
if(!isset($_SESSION['patientLogin'])){
	$_SESSION['msg'] = 'You must login frist!';
	header("Location:login.php");
}else{

?>
<!DOCTYPE html> 
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		
		<link href="assets/img/favicon.png" rel="icon">
		
		
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		
		<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>

		
		<div class="main-wrapper">
		
		
		<?php include("header.php") ?>

			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			
			<div class="content success-page-cont">
				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<div class="col-lg-6 mt-4">
							
							<div class="card success-card">
								<div class="card-body">
									<div class="success-cont">
										<i class="fas fa-check"></i>
										<h3>Appointment booked Successfully!</h3>
										<a href="doctors.php" class="btn btn-primary view-inv-btn mt-5">Go To Doctors</a>
									</div>
								</div>
							</div>
					
							
							
						</div>
					</div>
					
				</div>
			</div>		
			
   
			
		   
		</div>

		<script src="assets/js/jquery.min.js"></script>
		
		
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		
		<script src="assets/js/script.js"></script>
		
	</body>

</html>

<?php } 
ob_end_flush();
?>