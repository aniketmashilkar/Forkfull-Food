<html>
<?php
		session_start();
		if(!(isset($_SESSION['id']) && $_SESSION['id'] != ''))
	   {
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
            //echo $result['username'];
            $username =  $result['username'];
            $emailid = $result['emailid'];
            $Gender = $result['Gender'];
        }
	?>
    <head>
        <title>Feedback Form</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">       
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

        <nav class="nav">
            <input type="text" placeholder='Search Here' id="search">
            <a href="#"><input type="button" value="SEARCH" id="box"></a>
            <p>Follow Us:</p>
            <a href="#"><img src="images/twitter-logo.png"></a>
            <a href="#"><img src="images/tp-fb-icon.gif"></a>
            <a href="#"><img src="images/tp-gp-icon.gif"></a>
        </nav>
            <div id="mainbody">
                <div id="add_res">
                <img src="images/community_send_recipe_icon.jpg" style="float: left;" align="center"> 
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">Feedback Form</h1>
                    <form method="post" action="feedback.php" enctype="multipart/form-data" > 
                        <table cellspacing="5" cellpadding="10">
                        <tr><td>YOUR NAME</td><td>:</td><td><input class="input" type="text" name="username" id="name" value = "<?php echo $username?>" disabled></td></tr>
                        <tr><td>E-MAIL ID</td><td>:</td><td><input class="input" type="email" name="emailid" id="email" value = "<?php echo $emailid?>" disabled></td></tr>
                        <tr><td>CITY</td><td>:</td><td><input class="input" type="text" name="city" id="city"></td></tr>
                        <tr><td>COMMENTS</td><td>:</td><td><textarea name="comment" id="comment" class="textarea" rows="8" cols="50" required></textarea></td></tr> 
                        <tr><td>FEEDBACK</td><td>:</td><td><textarea name="feedback" id="feedback" class="textarea" rows="8" cols="50" required></textarea></td></tr> 
                        <tr><td>GENDER</td><td>:</td><td>Male<input type = "radio" name = "Gender" value = "male" <?php if ($Gender == 'male') echo 'checked="checked"'; ?>" disabled>
                        Female<input type = "radio" name = "Gender" value = "female" <?php if ($Gender == 'female') echo 'checked="checked"'; ?>" disabled></td></tr> 
					   <tr><td colspan="2"><input type="submit" value="submit" name="feedback" value = "SUBMIT"></td><td><button type="reset">CLEAR</button></td></tr> </table>
                    </form>
                </div> 
            </div>
            <?php
                 if(isset($_POST['feedback']))
             {
            require_once 'database.php';

            
            $city = $_POST['city'];
            $comments = $_POST['comment'];
            $feedback = $_POST['feedback'];
            $Gender = $_POST['Gender'];
            $update = "INSERT INTO feedback (NAME, EMAIL, CITY, COMMENTS, FEEDBACK, GENDER) VALUES ('$username','$emailid','$city','$comments','$feedback','$Gender')";
            $db->exec($update);
                }
            ?>
            <div class="side_main">
            <div class="sidebox">
                <img src="images/best.jpg">
                <ul id="ul">
                    <li onclick="indian()"><a href="#">Indian Recipies</a></li>
                    <li onclick="salad()"><a href="#">Salad Recipies</a></li>
                    <li onclick="soups()"><a href="#">Soups  Recipies</a></li>
                    <li onclick="continental()"><a href="#">Continental Recipies</a></li>
                    <li onclick="snacks()"><a href="#">Snacks Recipies</a></li>
                    <li onclick="dessert()"><a href="#">Desserts Recipies</a></li>
                </ol>
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
                <tr><td colspan="2"><input  id="nm1"style="width: 340px;" type="text" required  placeholder='Name' maxlength="16"> </td></tr>
                <tr><td>EMAIL :</td></tr>
                <tr><td><input style="width: 340px;" type="email" required  placeholder='Email Address'> </td></tr>
                <tr><td >COMMENT :</td></tr>
                <tr><td colspan="2"><textarea cols="40" rows="5" required placeholder='Comments'></textarea></td></tr>
                <tr><td colspan="2"><button type="submit" style="margin: 10px 10px;" onclick="comment()">SUBMIT</button></td></tr>
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
            <p style="clear:both; text-align: center; font-size: 18px; font-family: calibri;">© Copyright Forkfull Food Convergence Limited 2014 All rights reserved.</p>         
        </div>  
    </body>
</html>