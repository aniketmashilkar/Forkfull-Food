<?php
	$username = 'root';
	$password = '';
	$host = 'localhost';
	
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=vfood',$username,$password);
		//echo "connected";
	}
	catch(PDOExceptio $e)
	{
		echo $e->getMessage();
	}

