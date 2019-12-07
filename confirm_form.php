<?php
	
require_once 'database.php';
			$username = $_POST['username'];
			$email = $_POST['email'];
			$pass1 = $_POST['password1'];
			$pass2 = $_POST['password2'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$birthdate = stripslashes($_POST['date']);
			
if(empty($username) || empty($email) || empty($pass1) || empty($pass2) || empty($address) || empty($gender) || empty($birthdate))
{
	exit();
}
if(strcmp($pass1,$pass2))
	{
		print ("<script>alert(\"Password should be match\")</script>");
		exit();
	}
			if (!empty($_FILES['avtar']) && $_FILES['avtar']['error'] == UPLOAD_ERR_OK)
			{
				
				$ext = explode('.', $_FILES['image']['name']);
				$ext = end($ext);
				echo $ext;
				$allow_ext = array('jpg','jpeg','png');
				$allow_type = array('image/jpeg', 'image/jpg', 'image/png');
				
				$tmp= $_FILES['avtar']['tmp_name'];//stores file in xamp/temp folder
				
				$path = getcwd();//current working directory
				
				$name = $path.'\avtars'.DIRECTORY_SEPARATOR.$username.'.png'.$ext;
				
				$sucess = move_uploaded_file($tmp,$name);
					if (in_array($ext,$allow_ext))
				 	{
						//$sucess = move_uploaded_file($tmp,$name);
						echo "reach hear";
					}
					if($sucess)
				{
					print("sucessfull!!<br>");
				}
			}
	$joindate = date('Y-m-d H:i:s');
	$hash = password_hash($pass1, PASSWORD_DEFAULT, ['cost' => 12]);
	$query = "INSERT INTO users (username, password,  emailid, birthdate, address, Gender, joined) 
	VALUES ( '$username', '$hash', '$email','$birthdate', '$address', '$gender', '$joindate')";


	$db->exec($query);

	
	//header("Location:index.php");
?>