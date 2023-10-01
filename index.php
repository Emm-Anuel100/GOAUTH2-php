<?php
require_once 'config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login & Registration with google using Php </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<section class="main">
		<div class="inner">
			<p class="inner_p">
				Let visitors easily authorize on your website with their Google account and save and utilize their data:
			</p>
			<a href="<?= htmlspecialchars( $loginURL ); ?>"><img src="assets/image/login-google.png" class="fbbutton" alt="Login With Google"></a>
		</div>
	</section>
	
</body>
</html>