<html>
    <head>
        <title>VIDEOS</title>
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
                            <li><a href="#">USER'S RECP.</a></li>
                        </ul>
                    </li>
                    <li id="ul1"><a href="#">COMMUNITY</a>
                        <ul><li><a href="addrec.php">Add your Recipes</a></li></ul></li>
                    <li id="ul1"><a href="#">MY ACCOUNT</a>
                        <ul><li><a href="#">USER PROFILE</a></li>
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
            <a href="images/Twitter.htm"><img src="images/twitter-logo.png"></a>
            <a href="images/Facebook - Log In.htm"><img src="images/tp-fb-icon.gif"></a>
            <a href="images/Gmail.htm"><img src="images/tp-gp-icon.gif"></a>
        </nav>     
            <div id="mainbody">
                <div id="video"></div>
                <div onclick="vd1()"><a href="#"><p id="pv"><div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 700px;float: left"> Russian salad ( Olivier salad )</h1>
                    </div></p></a></div>
                <div onclick="vd2()"><a href="#"><p id="pv"><div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 700px;float: left"> Perfect Summer Recipe</h1>
                    </div></p></a></div>
                <div onclick="vd3()"><a href="#"><p id="pv"><div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 700px;float: left"> Charmoula Paneer Steaks</h1>
                    </div></p></a></div>
                <div onclick="vd4()"><a href="#"><p id="pv"><div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 700px;float: left"> Perfect Egg Rolls</h1>
                    </div></p></a></div>
                <div onclick="vd5()"><a href="#"><p id="pv"><div class="b3head">
                        <h1 style="margin: 0px;color: white;width: 700px;float: left"> Gulab Jamun</h1>
                    </div></p></a></div>
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
                            <li><a href="#">USER'S RECP.</a></li>
                        </ul>
                    </li>
                    <li id="ul1"><a href="#">COMMUNITY</a>
                        <ul><li><a href="addrec.php">Add your Recipes</a></li></ul></li>
                    <li id="ul1"><a href="#">MY ACCOUNT</a>
                        <ul><li><a href="#">USER PROFILE</a></li>
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
                <a href="images/Facebook - Log In.htm"><img src="images/facebook1.jpg"></a>
                <a href="images/Twitter.htm"><img src="images/twitter1.jpg"></a>
                <a href="images/Sign in to Yahoo India.htm"><img src="images/yahoo1.jpg"></a>
                <a href="images/Google+.htm"><img src="images/google+.jpg"></a> 
            </div>
            <div class="conts">
                <p style="border-bottom: 4px solid;">CONTACT FORKFULL FOOD :</p>
                 <p style=" font-size: 20px;color: orange;">E-MAIL : binod@forkfullfood.com<br><br><br>
                 CONTACT NO: +91&nbsp9182736455</p>
            </div>
            <div style="clear:both; text-align: center; font-size: 18px; font-family: calibri;">© Copyright Forkfull Food Convergence Limited 2014 All rights reserved.</div>
                
            </div>
            
        </div>
    </body>
</html>