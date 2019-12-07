<?php
	session_start();
	session_destroy();
	unset($_SESSION['user']);
	header("location:login.php");

	if(isset($_POST['logout']))
	{
		session_destroy();
		unset($_SESSION['user']);
		header("location:login.php");
	}
?>