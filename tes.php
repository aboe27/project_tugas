<?php 
	session_start();
	if($_SESSION['status']!="login"){
		echo "anda login";
	}
	?>