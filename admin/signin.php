<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<title>TunFlixTV – Movies & TV Shows</title>

</head>
<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
	<form action="login.php" method="GET" class="sign__form">
		
							<a href="index.html" class="sign__logo">
								<img src="img/logo.svg" alt="">
								
							</a>
							<?php
							session_start();
								if (isset($_SESSION['mail'])){	header('Location:index.php');
}
							if(isset($_GET['error'])){?>
							<div class="alert alert-warning" style="color: #842029; margin:15px" ><b><?=$_GET['error']?></b></div>
						<?php } ?>
							<div class="sign__group">
								<input type="email" class="sign__input" placeholder="Email" name="email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" name="password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" type="checkbox" checked="checked">
								<label for="remember">Remember me</label>
							</div>
							
							<button class="sign__btn" type="submit">Sign in</button>


							<span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span>

							<span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>