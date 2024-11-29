<?php 
ob_start();
session_start();
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
	<body class="account-page">


		<div class="main-wrapper">
		

            <?php include("header.php") ?>

			<div class="content" >
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
	
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6  text-center">
											<h1 class="">Who are you ?</h1>
                                        <div class="flex-row mt-4">
                                            <div class="text-center login-link mb-3">
							                    <a href="login.php" class="btn btn-primary btn-lg px-5"><strong>Patient</strong></a>
						                    </div>

                                            <div class="text-center login-link ">
                                                    <a href="doctorlogin.php" class="btn btn-primary btn-lg px-5"><strong>Doctor</strong></a>
						                    </div>

                                        </div>
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

<?php 
ob_end_flush();
?>