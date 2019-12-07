<?php
		if(isset($_POST['regform']))
        {
			require_once 'database.php';

			$username = $_POST['username'];
			$email = $_POST['email'];
			$pass1 = $_POST['password1'];
			$pass2 = $_POST['password2'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$birthdate = stripslashes($_POST['date']);
			$file_name = $_FILES['avtar']['name'];
			$file_size =$_FILES['avtar']['size'];
			$file_tmp =$_FILES['avtar']['tmp_name'];
			$file_type=$_FILES['avtar']['type'];
		
			
			
			
			if(!preg_match('/^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$/',$email))
				{
					print("<script>alert(\"enter email id \")</script>");
				}
				
			$query = "select count(emailid) from users where emailid = '$email'";
			
			
			$result = $db->query($query);
			
			$res = $result->rowCount();
			
			
			if(strlen($pass1)<8 || strlen($pass1) >20)
				{
					print ("<script>alert(\"Password leght must be in 8-20 \")</script>");

				}
				echo $pass1."</br>".$pass2;
			if(strcmp($pass1,$pass2))
				{
						print ("<script>alert(\"Password should be match\")</script>");
						header("location:regform.php");
				}
					
			require_once'confirm_form.php';
			
			
			
					
			
				
			
			
        } 

?>