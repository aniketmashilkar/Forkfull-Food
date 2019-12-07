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
        <title>User Homepage</title> 
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
            echo $_SESSION['user']." is logged in";
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
				<div class="images">
					<div id="header">
						<div class="wrap">
							<div id="slide-holder">
							   <div id="slide-runner">
								<a href=""><img id="slide-img-1" src="images/slider/Thai-street-food-1-of-11.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-2" src="images/slider/Thai-Food-Tom-Yam-Kung.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-3" src="images/slider/scroll1.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-4" src="images/slider/402852.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-5" src="images/slider/cottage-cheese-steak_med.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-6" src="images/slider/chocolate-thunder-from-down-under.png" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-7" src="images/slider/home-image-25-jul-2012.jpg" class="slide" alt="" /></a>
								<a href=""><img id="slide-img-8" src="images/slider/fruits_drink.jpeg" class="slide" alt="" /></a>
									<div id="slide-controls">
									<p id="slide-client" class="text"><strong>post: </strong><span></span></p>
									<p id="slide-desc" class="text"></p>
									<p id="slide-nav"></p>	
									</div>
								</div>
							</div>
						    <script type="text/javascript">
							 if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"THAI","desc":"Thai street food"},{"id":"slide-img-2","client":"THAI","desc":"Tom Yam Kung"},{"id":"slide-img-3","client":"ITALLIAN","desc":"SPRING SALAD"},{"id":"slide-img-4","client":"INDIAN","desc":"ROLLS"},{"id":"slide-img-5","client":"CONTINENTAL","desc":"Cottage Cheese Steak"},{"id":"slide-img-6","client":"CHOCOLATE RECIPES","desc":"Chocolate Thunder"},{"id":"slide-img-7","client":"INDIAN RECIPES","desc":"PANEER SIZZLERS"},{"id":"slide-img-8","client":"DRINKS","desc":"Fruits Drink"}];
						    </script>
						</div>
					</div>
                </div>                        
                <div id="b1">
                    <div class="b1head" onclick="rec_day()">
                        <h1 style="margin: 0px;color: white"> Recipe Of The Day </h1>
                    </div>
                    <div class="di" style=" background: url('images/fish-fry_med1.jpg')" onclick="rec_day()">
						<div class="he1"> <h3 style="margin: 0px;color: white">Kerala Fish Fry </h3></div>
					</div>
                        <p style="font-size: 20px;">A lovely serving of fried fish from down South. Fish enriched with ginger, methi seeds, coriander powder and fried crisp.</p>
                </div>
                <div id="b2">
                    <div class="b2head">
                        <h1 style="margin: 0px;color: white"> Health Tips </h1>
					</div>
					<img src="images/vinegar_med.jpg" style="float: left;">
					<p style="font-size: 25px;">Can vinegar be used to treat tuberculosis?</p><br>
					<a href=health1.html><p style="margin: 5px; font-size: 20px;">More>></p></a>   
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