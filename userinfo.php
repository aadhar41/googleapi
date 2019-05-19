<?php

	session_start();

	// print_r($_SESSION['user']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Info</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
	<div class="container ">
		<br>
		<div class="card" style="width:300px">
		  <img class="card-img-top" src="<?php echo $_SESSION['user']['picture']; ?>" alt="Card image">
		  <div class="card-body">
		    <h4 class="card-title"><?php echo $_SESSION['user']['name']; ?></h4>
		    <p class="card-text"><?php echo $_SESSION['user']['email']; ?></p>
		    <a href="logout.php" class="btn btn-danger" title="">Logout</a>
		  </div>
		</div>

		<br>
	</div>
	
</body>
</html>