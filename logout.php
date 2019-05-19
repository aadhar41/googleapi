<?php
	
		session_start();
		
		unset($_SESSION);
		session_destroy(); 

		echo 'Logged Out Successfully <a href="index.php" title="">Login again</a>';

		
?>