<?php
ob_start();
include ("conn.php");
session_start();
if(isset($_SESSION['patientLogin'])){
	header("Location:patient-dashboard.php");
	$_SESSION["alreadySign"]="You already signed in";
}else{
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encpass = sha1($password);
	if(empty($email) || empty($password)){
		$_SESSION['errmsg'] = "Please enter your email and password";
	}else{	
	$selectPatient = "SELECT `id`,`email` , `password` FROM `patients` WHERE email ='$email' AND  password = '$encpass' ";
	$select= $conn -> query($selectPatient);
	if($select -> num_rows !=0){
		$_SESSION['patientLogin'] = true;

		foreach($select as $i){
		$_SESSION['id'] = $i['id'];
		}
		
		sleep(0.6);
		header("Location:patient-dashboard.php");
	}else{
		$_SESSION['errmsg'] = "Email or Password is incorrect";
	}
}
}
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
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span> PAITIENT</h3>
										</div>
										<?php 
										if(isset($_SESSION['loginMsg'])){
												echo "<div class='alert alert-danger' role='alert'>";
												echo $_SESSION['loginMsg'];
												echo "</div>";						
											unset($_SESSION['loginMsg']);
											header("Refresh:1");
										}
										?>
										<form action="login.php" method="POST">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label">Password</label>
											</div>
											<?php 
										if(isset($_SESSION['errmsg'])){
												echo "<div class='alert alert-danger' role='alert'>";
												echo $_SESSION['errmsg'];
												echo "</div>";						
											unset($_SESSION['errmsg']);
											header("Refresh:1");
										}
										?>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											
											
											<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
										</form>
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
ob_end_flush() 
 ?>