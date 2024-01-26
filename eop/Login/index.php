<?php
session_start();
if(isset($_SESSION['uname'])){
      header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="../css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="../css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="../css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="../css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>

	<div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<div class="logo"style="position: center;vertical-align:middle;text-align:center;margin-left: 10%">
                            <a href="../index.php">
                                <img src="../images/logo.png" alt="Logo">
                            </a>
            	</div>
            	<br>
				<form class="login100-form validate-form" action="php/logincon.php" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Useremail is reauired">
						<span class="label-input100">Useremail</span>
						<input class="input100" type="text" name="useremail" placeholder="Type your useremail">
						<span class="focus-input100" data-symbol="&#xf200;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="button">
						<div class="button"style="position: center;vertical-align:middle;text-align:center;">
							<div class="button"></div>
							<button class="main-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="index-02.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


	<!--====== jquery js ======-->
    <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="../js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="../js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="../js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="../js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="../js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="../js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="../js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="../js/map-script.js"></script>

</body>
</html>