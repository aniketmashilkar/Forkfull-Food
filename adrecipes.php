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
        <title>User Recipes</title> 
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
                                   <li><a href="adrecipes.php">RECIPES</a></li>
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
            <form class="nav">
                <input type="text" placeholder='Search Here' id="search">
                <a href="#"><input type="button" value="SEARCH" id="box"></a>
                <p>Follow Us:</p>
                <a href="images/Twitter.htm"><img src="images/twitter-logo.png"></a>
                <a href="images/Facebook - Log In.htm"><img src="images/tp-fb-icon.gif"></a>
                <a href="images/Gmail.htm"><img src="images/tp-gp-icon.gif"></a>
            </form>
            
            <div id="mainbody">

                <div>
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: white;" align="center">Admin Recipes</h1>
                <table border="1" cellpadding="1" cellspacing="2" style="
                height: auto;
                float: left;
                border: 15px solid #99CC00;
                background: white;
                border-radius: 10px;
                box-shadow: 0px 0px 15px rgba(0,0,0,0.9);">
                <tr>
                    <th>TITLE</th>
                    <th>INGREDIENTS</th>
                    <th>METHOD</th>
                    <th>TYPE</th>
                    <th>COOKTIME</th>
                    <th>UPLOAD DATE</th>
                    <th>PHOTOS</th>
                </tr>
                <?php
                    ERROR_REPORTING(E_ALL^E_NOTICE);
                    require_once 'database.php';
                    
                    $query = 'SELECT * FROM adrecp';
                    $res = $db->query($query);
                    $result=$res->fetch();
                    while($result)
                    {
                    
                        ?>
                        <tr>
                        <td><?php
                         $title =  $result['TITLE'];
                         echo $title;
                         ?>
                        </td>
                        <td><?php
                         echo $result['INGREDIENTS'];?>
                        </td>
                        <td><?php
                         echo $result['METHOD'];?>
                        </td>
                        <td><?php
                         echo $result['TYPE'];?>
                        </td>
                        <td><?php
                         echo $result['COOKTIME'];?>
                        </td>
                        <td><?php
                         echo $result['upload'];?>
                        </td>
                        <td><?php
                         $name = $path.'adrecipes'.DIRECTORY_SEPARATOR.$title.'.'.$ext;
                         ?>
                         <img src = "<?php echo $name.png?>" width="100" height = "100">
                        </td>
                        </tr>
                        <?php
                        $result = $res->fetch();
                    }
                ?>
                </table>
        </div>

                
                <div id="b3">
                    <div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 200px;float: left"> Photo Gallery </h1>
                    </div>
                    <marquee behavior="alternate">
                    <img src="images/photogal/2-Indian-food.jpg">
                    <img src="images/photogal/breakfast.jpg">
                    <img src="images/photogal/images (1).jpg">
                    <img src="images/photogal/images.jpg">
                    </marquee>       
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
                                   <li><a href="adrecipes.php">RECIPES</a></li>
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