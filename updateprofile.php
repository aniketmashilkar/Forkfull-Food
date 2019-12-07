<?php

	session_start();
		if(!(isset($_SESSION['id']) && $_SESSION['id'] != ''))
	{
         header ("Location: login.php");
     }
		
	error_reporting(E_ALL^E_NOTICE);
	

	require_once "database.php";
	

	
	$id =  $_SESSION['id'];
	$query = "select * from users where id  = '$id'";
	echo $query;
	$res = $db->query($query);
	while($result = $res->fetch())
		{
			$username =  $result['username'];
			$address = $result['address'];
			$emailid = $result['emailid'];
			$birthdate = $result['birthdate'];
			$Gender = $result['Gender'];


		}



?>
<html>
    <head>
        <title>Update User Profile</title> 
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">  
		<link rel="stylesheet" href="style2.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <body>
        <?php

            error_reporting(E_ALL^E_NOTICE);
            session_start();
            echo "Your Session id:".$_SESSION['id'];
        ?>
        <div id="div_main" > 
		 <div id="head"></div>
            
           <nav>
                <ul>
                    <li id="ul1"><a href="userindex.php">HOME</a></li>
                    <li id="ul1"><a href="#">TUTORIALS</a>      
                    <ul>  
                        <li><a href="#">RECIPES</a>
                            <ul>                            
                               <li onclick="RECIPES()"><a href="#">Categories</a></li>
                               <li onclick="Cuisine()"><a href="#">Cuisine</a></li>
                            </ul>
                        </li>
                        <li><a href="videos.php">VIDEOS</a></li>
                    </ul>
                    </li>
                    <li id="ul1"><a href="#">MENUS</a>
                        <ul>  
                            <li><a href="#">ADMIN RECP.</a>
                                <ul>                            
                                   <li><a href="#">RECIPES</a></li>
                                   <li><a href="#">VIDEOS</a></li>
                                </ul>
                            </li>
                            <li><a href="userrecipes.php">USER'S RECP.</a></li>
                        </ul>
                    </li>
                    <li id="ul1"><a href="#">COMMUNITY</a>
                        <ul><li><a href="addrec.php">Add your Recipes</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                        </ul></li>
                    <li id="ul1"><a href="My_Account.php">MY ACCOUNT</a>
                        <ul><li><a href="updateprofile.php">UPDATE PROFILE</a></li>
                            <li><a href="aboutus.php">ABOUT US</a></li>
                            <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        <div id="mainbody">
            <div id="add_res">
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">Update Your Details</h1>
        		<form method = "POST" action = "#"  enctype="multipart/form-data" align="center">
        			USERNAME: <input type = "text" name = "username" value = "<?php echo $username?>"><br>
        			EMAIL ID: <input type = "text" name = "emailid" value = "<?php echo $emailid?>"></br>
        			Address: <textarea name = "address" ><?php echo $address?></textarea></br>
        			Birthdate: <input type = "date" name = "birthdate" value="<?php echo $birthdate?>"></br>
        			Gender: Male<input type = "radio" name = "gender" value = "male" <?php if ($Gender == 'male') echo 'checked="checked"'; ?>">
        				Female<input type = "radio" name = "gender" value = "female" <?php if ($Gender == 'female') echo 'checked="checked"'; ?>">
        				<br>
        			Upload Photo:	<input type = "file" name = "avtar" ></br>
        			<input type = "submit" name = "submit1" value = "Update"> 
        			<input type = "submit" name = "changepass" onclick = "window.open('changepass.php');" value = "change password"></br>
        		</form>
            </div> 
        </div>
	<?php
		if(isset($_POST['submit1']))
		{
			require_once 'database.php';

			$username =  $_POST['username'];
			$address = $_POST['address'];
			$emailid = $_POST['emailid'];
			$birthdate = $_POST['birthdate'];
			$Gender = $_POST['gender'];
			$update = "UPDATE users SET username = '$username', emailid = '$emailid', birthdate = '$birthdate',address = '$address' , Gender = '$Gender' WHERE id = '$id'";
			echo "Successfully Updated";
			$db->exec($update);
			


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
				if(file_exists($name))
				{
					unlink($name);
					echo "</br> file deleted";
				}
				echo $name;
				$sucess = move_uploaded_file($tmp,$name);
					if (in_array($ext,$allow_ext))
				 	{
						//$sucess = move_uploaded_file($tmp,$name);
						echo "reach hear";
					}
					if($sucess)
				{
					print("file uploaded sucessfully<br>");
				}
			}
		}
        /*
		if(isset($_POST['changepass']))
		{
			require_once'changepass.php';

			
		}*/


	?>
			<nav>
                <ul>
                    <li id="ul1"><a href="userindex.php">HOME</a></li>
                    <li id="ul1"><a href="#">TUTORIALS</a>      
                    <ul>  
                        <li><a href="#">RECIPES</a>
                            <ul>                            
                               <li onclick="RECIPES()"><a href="#">Categories</a></li>
                               <li onclick="Cuisine()"><a href="#">Cuisine</a></li>
                            </ul>
                        </li>
                        <li><a href="videos.php">VIDEOS</a></li>
                    </ul>
                    </li>
                    <li id="ul1"><a href="#">MENUS</a>
                        <ul>  
                            <li><a href="#">ADMIN RECP.</a>
                                <ul>                            
                                   <li><a href="#">RECIPES</a></li>
                                   <li><a href="#">VIDEOS</a></li>
                                </ul>
                            </li>
                            <li><a href="userrecipes.php">USER'S RECP.</a></li>
                        </ul>
                    </li>
                    <li id="ul1"><a href="#">COMMUNITY</a>
                        <ul><li><a href="addrec.php">Add your Recipes</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                        </ul></li>
                    <li id="ul1"><a href="My_Account.php">MY ACCOUNT</a>
                        <ul><li><a href="updateprofile.php">UPDATE PROFILE</a></li>
                            <li><a href="aboutus.php">ABOUT US</a></li>
                            <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

			<div id="foot">
               <div style="float: left; margin: 5px 10px;">
                <p style="border-bottom: 4px solid;">COMMENTS :</p>
                <form method="post">
                    <table cellspacing="2" cellpadding="2" >
                        <tr><td>NAME :</td></tr>
                        <tr><td colspan="2"><input style="width: 340px;" type="text" required  placeholder='Name' maxlength="16"> </td></tr>
                        <tr><td>EMAIL :</td></tr>
                        <tr><td><input style="width: 340px;" type="email" required  placeholder='Email Address'> </td></tr>
                        <tr><td >COMMENT :</td></tr>
                        <tr><td colspan="2"><textarea cols="40" rows="5" required placeholder='Comments'></textarea></td></tr>
                        <tr><td colspan="2"><button type="submit" style="margin: 10px 10px;">SUBMIT</button></td></tr>
                    </table>
                </form>
               </div>
               
               <div class="link">
                <p style="border-bottom: 4px solid;">SOCIAL NETWORKS :</p>
                    <a href="facebook.htm"><img src="images/facebook1.jpg"></a>
                    <a href="facebook.htm"><img src="images/twitter1.jpg"></a>
                    <a href="facebook.htm"><img src="images/yahoo1.jpg"></a>
                    <a href="facebook.htm"><img src="images/google+.jpg"></a> 
                </div>
            <div class="conts">
                <p style="border-bottom: 4px solid;">CONTACT FORKFULL FOOD :</p>
                 <p style=" font-size: 20px;color: orange;">E-MAIL : aniket@forkfullfood.com & vikas@forkfullfood.com<br><br><br>
                 CONTACT NO: +91&nbsp9029921941 & +91&nbsp8879181153</p>
            </div>
            <p style="clear:both; text-align: center; font-size: 18px; font-family: calibri;">© Copyright Forkfull Food Convergence Limited 2017 All rights reserved.</p>         
        </div>  
    </body>
</html>