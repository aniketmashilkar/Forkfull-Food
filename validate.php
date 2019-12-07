<?php
ERROR_REPORTING(E_ALL^E_NOTICE);
$value = $_POST['query'];
$field = $_POST['field'];
$pass = "";

//require_once 'db.php';
if($field == "username")
{
	if(strlen($value)<4)
	{
		echo "username must be more than 4 letter";	
	}
	/*
	$query = "SELECT username FROM users WHERE username = :username";
            
            $records = $db->prepare($query);
            $records->bindParam(':username', $username);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            echo $results;*/
/*			
	  
$con=mysqli_connect("localhost","root","","food");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT username FROM users where username = '$username'");
if(mysql_num_rows($result)>0)
       {
        	echo"name already exists";
       }
       else
       {
       		echo "Not exist";
       }



mysqli_close($con);
*/
    
}

if($field == "email")
{
	if(!preg_match('/^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$/',$value))
	{
					echo"Pls Enter valied email";
					
	}	
}

if($field == "password1")
{
	if(strlen($value)<8)
				{
					echo"Password should be more than 8 letter";					
				}				
}
if($field == "password2")
{
				
	if(strlen($value)<8)
				{
					echo"Retype Password should be more than 8 letter";					
				}	
}

?>