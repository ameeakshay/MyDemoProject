<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="login-box animated fadeInUp">
			<form action="add_user_backend.php" method="post">
			<div class="box-header">
				<h2>Sign Up</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="passwd" name="passwd">
			<br/>
			<label for="rpassword">Retype Password</label>
			<br/>
			<input type="rpassword" id="rpasswd" name="rpasswd">
			<br/>
			<label for="address">Address</label>
			<br/>
			<input type="text" id="address" name="address">
			<br/>
			<label for="phno">Mobile number</label>
			<br/>
			<input type="text" id="phno" name="phno">
			<br/>
			<button type="submit">Sign Up</button>
			<br/>
			<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
			<br/>
			</form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
