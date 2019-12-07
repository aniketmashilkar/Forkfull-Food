<html>
<?php
        session_start();
         if(isset($_SESSION['Aid']))
     {
        //echo "<script>confirm(\"Admine is login \n first logout and  user \")</script>";
        require_once 'logout.php';

     }
        if(!(isset($_SESSION['id']) && $_SESSION['id'] != '' ))
    {
         header ("Location: login.php");
     }

    ?>
    <head>
        <title>User Add Recipies</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">       
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <body>
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
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">ADD YOUR RECIPIES</h1>
                    <form method="post" action="addrec.php" enctype="multipart/form-data" > 
                        <table cellspacing="5" cellpadding="10">
                        <tr><td>YOUR NAME</td><td>:</td><td><input class="input" type="text" name="name" id="name" required placeholder='Name'></td></tr>
                        <tr><td>E-MAIL ID</td><td>:</td><td><input class="input" type="email" name="email" id="email" required placeholder='Email id'></td></tr>
                        <tr><td>TITLE</td><td>:</td><td><input class="input" type="text" name="title" id="title" required placeholder='Title'></td></tr>
                        <tr><td>INGREDIENTS</td><td>:</td><td><textarea name="ingred" id="ingred" class="textarea" rows="8" cols="50" required></textarea></td></tr> 
                        <tr><td>METHOD</td><td>:</td><td><textarea name="method" id="method" class="textarea" rows="8" cols="50" required></textarea></td></tr> 
                        <tr><td>TYPE</td><td>:</td><td><input type="radio" name="types" id="types" name="types" value="veg">VEG.<input type="radio" id="types" name="types" value="non-veg">NON-VEG.</td></tr> 
                        <tr><td>COOKTIME</td><td>:</td><td><input  class="input" type="text" name="ctime" id="ctime" required></td></tr> 
                       <tr><td>PHOTOS/VIDEOS</td><td>:</td><td><input class="input" name = "recps" type="file" ></td></tr> 
                       <tr><td colspan="2"><input type="submit" value="submit" name="regform" value = "SUBMIT"></td><td><button type="reset">CLEAR</button></td></tr> </table>
                    </form>
                </div> 
            </div>
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
		<?php
           require_once"user_rec.php";

        ?>  
    </body>
</html>