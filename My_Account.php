<?php
	session_start();
	if(!(isset($_SESSION['id']) && $_SESSION['id'] != '')){
                header ("Location: login.php");
            }
	
	require_once "database.php";
	//$username = $_SESSION['username'];
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
		
		$birthdate = substr($birthdate, 0,10);



?>
<html>
	<body><html>
    <head>
        <title>My Account</title> 
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
                    <center>
        			<img src="avtars/<?php echo $username?>.png" height = "160" width = "160" style="border: 10px solid black;"></br>
        			<big>USERNAME:<?php echo $username?></big><br>
        			<big>EMAIL ID:<?php echo $emailid?></big></br>
        			<big>Address:<?php echo $address?></big></br>
        			<big>Birthdate:<?php echo $birthdate?></big></br>
        			<big>Gender:<?php echo $Gender?></big></br> </center>
    			</div>
            </div>
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