<?php
	session_start();
	session_destroy();
	echo "<script> alert('Sign Out Successfully.');window.location='login_event.php'; </script>";	
?>