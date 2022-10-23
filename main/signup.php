<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/slider-radio.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>TunFlixTV – Movies & TV Shows</title>

</head>
<body>
	<!-- sign in -->
	<div class="sign section--full-bg" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="addUser.php" class="sign__form">
							<a href="index.html" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a>
							<?php
							session_start();
								if (isset($_SESSION['mailuser'])){	header('Location:index.php');
								}
							if(isset($_GET['error'])){?>
							<script> alert('<?=$_GET['error']?>'); </script>
							<?php } ?>
							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="First Name" name="prenom" required="required">
							</div>
							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Last Name" name="nom" required="required">
							</div>

							<div class="sign__group">
								<input type="email" class="sign__input" placeholder="Email" name="mailuser" required="required">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="password" required="required">
							</div>
							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Confirm Password" name="confirmPassword" required="required">
							</div>
							
							<div class="sign__group sign__radio">
								<span style="color: white;margin-bottom:20px;">Choose Plan:</span>
								<input id="Premium" name="abonnement" type="checkbox" checked="false" value="Premium" onclick="document.getElementById('Free').checked=false">
								<label for="Premium">Premium </label>
								<input id="Free" name="abonnement" type="checkbox" checked="false" value="Free" onclick="document.getElementById('Premium').checked=false">
								<label for="Free">Free</label>	
							</div>
							
							
							<button class="sign__btn" type="submit">Sign up</button>	

							<span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/slider-radio.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/main.js"></script>
	<script>document.getElementById('Free').checked=false</script>
</body>
</html>