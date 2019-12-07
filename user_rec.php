<?php
	ERROR_REPORTING(E_ALL^E_NOTICE);
require_once 'database.php';
			$username =htmlspecialchars( $_POST['name']);
			$email = htmlspecialchars($_POST['email']);
			$title = htmlspecialchars($_POST['title']);
			$ingred = htmlspecialchars($_POST['ingred']);
			$method = htmlspecialchars($_POST['method']);
			$types = htmlspecialchars($_POST['types']);
			$ctime = htmlspecialchars($_POST['ctime']);
			
if(empty($username) || empty($email) || empty($title) || empty($ingred) || empty($method) || empty($types) || empty($ctime))
{
	exit();
}
			if (!empty($_FILES['recps']) && $_FILES['recps']['error'] == UPLOAD_ERR_OK)
			{
				
				$ext = explode('.', $_FILES['recps']['name']);
				$ext = end($ext);
				
				$allow_ext = array('jpg','jpeg','png');
				$allow_type = array('image/jpeg', 'image/jpg', 'image/png');
				
				$tmp= $_FILES['recps']['tmp_name'];//stores file in xamp/temp folder
				
				$path = getcwd();//current working directory
				
				$name = $path.'\userrecipes'.DIRECTORY_SEPARATOR.$title.'.png';
				
				
					if (in_array($ext,$allow_ext))
				 	{
						$sucess = move_uploaded_file($tmp,$name);
					}
					
			}
	$upload_date = date('Y-m-d H:i:s');
	$query = "INSERT INTO usrrecp (NAME, EMAIL, TITLE, INGREDIENTS, METHOD, TYPE, COOKTIME, upload) 
	VALUES ( '$username', '$email', '$title','$ingred', '$method', '$types', '$ctime', '$upload_date' )";
	
	$db->exec($query);

?>