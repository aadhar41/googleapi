
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login with Google</title>
	<link rel="stylesheet" href="">
</head>
<body>
<div style="float: center;">
	<h2>Login with google +</h2>
	<?php 
		session_start();
		// echo "<pre>";
		// print_r($_SESSION);
		// session_destroy(); 
	?>
<a href="login.php" title="">google</a>
</div>
</body>
</html>

<?php
	
	/*
		References :
		console.developers.google.com

		https://github.com/googleapis/google-api-php-client

		https://developers.google.com/+/web/api/rest/oauth

		https://www.youtube.com/watch?v=Vvr0LmGRFS4&list=PLCakfctNSHkGf5i_UIaKIzPLPJlcpymXn&index=3
	*/

?>