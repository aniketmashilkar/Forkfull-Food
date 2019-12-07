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

		<?php
		session_start();
		if(!(isset($_SESSION['id']) && $_SESSION['id'] != ''))
	{
         header ("Location: login.php");
     }
			

			require_once 'database.php';
			error_reporting(E_ALL^E_NOTICE);

		
			function check_len($pass)
			{

				if((strlen($pass))<8)
				{
					echo "<script>alert(`password length should be minimum 8 digit`)</script>";
				}
			}
		?>
        <div id="mainbody">
            <div id="add_res">
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">***Change Password***</h1>
        		<form method = "POST" action = "changepass.php">
        			Enter The New Password: <input type = "password" name = "newpass1" >
        		</br>
        		Retype New Password: <input type = "password" name = "newpass2">
        		<br>
        		Old Password: <input type = "password" name = "old">
        		<br>
        		<input type = "submit" name = "changepass1" value = "Change Pass">
        		</form>
                </div>
            </div>
		<?php
			
			if(isset($_POST['changepass1']))
			{
				$newpass1 = $_POST['newpass1'];
				$newpass2 = $_POST['newpass2'];
				$password = $_POST['old'];

				echo $newpass1."</br>".$newpass2."</br>".$password;
				
				check_len($newpass1);

				if(strcmp($newpass1, $newpass2))
				{
					echo "<script>alert(`Retype Password is not Match with New Password`)</script>";
				}
				$id = $_SESSION['id'];
				$query = "select * from users where id  = '$id'";
				
				$records = $db->prepare($query);
            	$records->execute();
           		$results = $records->fetch(PDO::FETCH_ASSOC);
           		$hash = password_hash($newpass2, PASSWORD_DEFAULT, ['cost' => 12]);

           		if(count($results) > 0 && password_verify($password, $results['password']))
            	{
            			$update = "UPDATE users SET password = '$hash' where id = '$id'";
            			echo $update;
            			$db->exec($update);
            			echo "</br>"."password change successfully";
				}
			}
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