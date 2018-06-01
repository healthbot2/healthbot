<?php
	$con = mysqli_connect("localhost","root","","webmail2") or
		die("Error".mysqli_connect_error());
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title  -->
<title>HealthBot &amp;</title>

<!-- Favicon  -->
<link rel="icon" href="img/core-img/favicon.ico">

<!-- Style CSS -->
<link rel="stylesheet" href="style.css">

</head>

<body>
	<!-- Preloader -->


	<!-- ***** Header Area Start ***** -->
	<header class="header-area">
		<!-- Top Header Area -->
		<div class="top-header-area">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 h-100">
						<div
							class="h-100 d-md-flex justify-content-between align-items-center">
							<p>
								Welcome to <span>HealthBot</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Header Area -->
		<div class="main-header-area" id="stickyHeader">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12 h-100">
						<div class="main-menu h-100">
							<nav class="navbar h-100 navbar-expand-lg">
								<!-- Logo Area  -->
								<a class="navbar-brand" href="index.html"><img
									src="img/core-img/logo-healthbot.png" alt="Logo"></a>

								<button class="navbar-toggler" type="button"
									data-toggle="collapse" data-target="#medilifeMenu"
									aria-controls="medilifeMenu" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" id="medilifeMenu">
									<!-- Menu Area -->
									<ul class="navbar-nav ml-auto">
										<li class="nav-item"><a class="nav-link"
											href="index.html">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item"><a class="nav-link"
											href="about-us.html">Add Modules</a></li>
										<li class="nav-item"><a class="nav-link"
											href="services.html">Add Survey</a></li>
										<li class="nav-item active"><a class="nav-link"
											href="notifications.php">Manage Notifications</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Breadcumb Area Start ***** -->
	<section class="breadcumb-area bg-img gradient-background-overlay"
		style="background-image: url(img/bg-img/notifications.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcumb-content">
						<h3 class="breadcumb-title">Notifications</h3>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Breadcumb Area End ***** -->

	<section class="medilife-contact-area section-padding-100">
		<div class="container">
			<div class="row">
				<!-- Contact Form Area -->
				<div class="col-12 col-lg-8">
					<div class="contact-form">
						<h5 class="mb-50">Update Notification</h5>

<?php
	$query = "select * from user_message where id = ".$_GET['ntf_id'];
	$result = mysqli_query($con,$query) or 
	die("Error".mysqli_error($con));	
	$record = mysqli_fetch_assoc($result);

?>
						<form action="update_notification.php" method="post">
							<input type="hidden" value="<?php echo $_GET['ntf_id'];?>" name="ntf_id">
							<div class="form-group">
								<label>Date</label> <input type="datetime-local" step="1" class="form-control"
									id="date" placeholder="Date" name="ntf_time" value="" style="color:black">
							</div>
							<br>
						<label for="checkbox" >Type of the Notification</label> <br>
							<div class="form-check form-check-inline">
								<label class="form-check-label"></label> <input
									class="form-check-input" type="radio" id="sms"
									value="sms" name="ntf_type" <?php if($record['msg_type'] == 'sms'){echo 'checked';}?>> SMS
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label"></label> <input
									class="form-check-input" type="radio" id="email"
									value="email" name="ntf_type" <?php if($record['msg_type'] == 'email'){echo 'checked';}?>> E-mail
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label"></label> <input
									class="form-check-input" type="radio" id="mob"
									value="mob" name = "ntf_type" <?php if($record['msg_type'] == 'mobile'){echo 'checked';}?>> Mobile Notification
							</div>
							<br>
							

<label for="Message content"></label>
							<div class="form-group">
								<textarea class="form-control" id="message"
									cols="30" rows="10" placeholder="Message" name="ntf_msg"  style="color:black"><?php echo $record['message']?></textarea>
							</div>
							<button type="submit" class="btn medilife-btn">Update</button>
						</form>
					</div>
				</div>

				
			</div>
		</div>
	</section>



	<!-- ***** Footer Area Start ***** -->
	<footer class="footer-area section-padding-100">
		<!-- Main Footer Area -->
		<div class="main-footer-area">
			<div class="container-fluid">
				<div class="row">

					<div class="col-12 col-sm-6 col-xl-3">
						<div class="footer-widget-area">
							<div class="footer-logo">
								<img src="img/core-img/logo-healthbot.png" alt="">
							</div>

							<div class="footer-social-info">
								<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>

					

					
				</div>
			</div>
		</div>
		<!-- Bottom Footer Area -->
		<div class="bottom-footer-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="bottom-footer-content">
							<!-- Copywrite Text -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Footer Area End ***** -->

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Plugins js -->
	<script src="js/plugins.js"></script>
	<!-- Active js -->
	<script src="js/active.js"></script>
	<!-- Google Maps -->
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
	<script src="js/map-active.js"></script>

</body>

</html>