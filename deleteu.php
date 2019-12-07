<?php
session_start();
if(!(isset($_SESSION['Aid']) && $_SESSION['Aid'] != ''))
    {
		echo "reach here";
         header("location:index.php");
     }

$name= $_POST['name'];

require_once 'database.php';

$query = "DELETE FROM users WHERE USERNAME = '$name'";

if($db->exec($query))
{
	echo"<script>alert(\"User is Successfully Deleted\")</script>";
}
else
{
	echo"<script>alert(\"User $name is not Present \")</script>";
}

include 'deleteusr.php';
?>