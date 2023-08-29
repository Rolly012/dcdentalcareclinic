<?php

	session_start();
	include('global/model.php');

	$model = new Model();
    $rows = $model->website_details();

    if (!empty($rows)) {
        foreach ($rows as $row) {
        	$web_name = $row['web_name'];
        	$web_code = strtoupper($row['web_code']);
            $web_header = $row['web_header'];
            $primary_color = $row['primary_color'];
            $secondary_color = $row['secondary_color'];
            $web_icon = $row['web_icon'];
       	}
    }

    if (isset($_POST['submit'])) {
		$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$model->verifiedChangePassword($_SESSION['approved_verification'], $hashed_password);
		unset($_SESSION['approved_verification']);

		echo "<script>window.open('index','_self');</script>";
	}

	if (isset($_SESSION['patient_sess'])) {
		echo "<script>window.open('patient/index.php','_self');</script>";
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
		<meta name="format-detection" content="telephone=no">
		
		<link rel="icon" href="assets/images/<?php echo $web_icon; ?>.png" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/<?php echo $web_icon; ?>.png" />
		<title><?php echo $web_name; ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="styles/assets/css/assets.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/typography.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/shortcodes/shortcodes.css">
		<link rel="stylesheet" type="text/css" href="styles/assets/css/style.css">
		<style type="text/css">
			.red-hover:hover {
				background-color: <?php echo $secondary_color?>!important
			}
		</style>
	</head>
	<?php include 'assets/css/color/color-1.php';  ?>
	<body id="bg">
		<div class="page-wraper">
			<!-- <div id="loading-icon-bx"></div> -->
			<div class="account-form">
				<div class="account-head" style="background-image:url(assets/images/bg2.png);"></div>
				<div class="account-form-inner">
					<div class="account-container">
						<div class="heading-bx left">
							<h2 class="title-head">Change <span>Password</span></h2>
							<p>Log in your account <a href="patient">Click here</a></p>
						</div>	
						<form class="contact-bx" method="POST">
							<div class="row placeani">
								<div class="col-lg-12">
									<?php 

										$rows = $model->displayPatientProfile($_SESSION['approved_verification']);

										if (!empty($rows)) {
											foreach ($rows as $row) {

									?>
									<div class="form-group">
										<h4><?php echo $row['fname'].' '.$row['lname']; ?>
										<small><br><?php echo $row['email']; ?></small> </h4>
									</div>
									<?php
											}
										}

									?>
									<div class="form-group">
										<div class="input-group">
											<label>New Password</label>
											<input name="password" type="password" id="password" class="form-control" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<label>Confirm Password</label>
											<input name="confirm-password" type="password" id="confirm_password" class="form-control" required>
										</div>
									</div>
								</div>
								<div class="col-lg-12 m-b30">
									<button name="submit" type="submit" value="Submit" class="red-hover btn button-md">Save Password</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="styles/assets/js/jquery.min.js"></script>
		<script src="styles/assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="styles/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="styles/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="styles/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="styles/assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="styles/assets/vendors/counter/waypoints-min.js"></script>
		<script src="styles/assets/vendors/counter/counterup.min.js"></script>
		<script src="styles/assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="styles/assets/vendors/masonry/masonry.js"></script>
		<script src="styles/assets/vendors/masonry/filter.js"></script>
		<script src="styles/assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src="styles/assets/js/functions.js"></script>
		<script src="styles/assets/js/contact.js"></script>
		<script type="text/javascript">
			var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

			function validatePassword() {
				if(password.value != confirm_password.value) {
					confirm_password.setCustomValidity("Passwords don't match.");
				} 

				else {
					confirm_password.setCustomValidity('');
				}
			}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>
	</body>
</html>
