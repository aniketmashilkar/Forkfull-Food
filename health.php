<html>
    <head>
        <title>Health.html</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">       
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <body>
    <script>
		function myFunction() 
		{
		alert("Please Login.. If not the REGISTER!");
		}
	</script>
        <div id="div_main" > 
		 <div id="head"></div>
            <nav>
                <ul>
                    <li id="ul2"><a href="index.html">HOME</a></li>
                    <li id="ul2"><a href="#">RECIPES</a>
                        <ul>                            
                            <li><a href="#">Categories</a>
                                <ul>
                                    <li onclick="myFunction()"><a href="#">Soups</a></li>
                                    <li onclick="myFunction()"><a href="#">Snacks</a></li>
                                    <li onclick="myFunction()"><a href="#">Desert</a></li>
                                    <li onclick="myFunction()"><a href="#">salad</a></li>
                                </ul></li>
                            <li><a href="#">Cuisine</a>
                                <ul>
                                    <li onclick="myFunction()"><a href="#">Indian</a></li>
                                    <li onclick="myFunction()"><a href="#">Continental</a></li>
                                    <li onclick="myFunction()"><a href="#">Chinese</a></li>
                                    <li onclick="myFunction()"><a href="#">Mexican</a></li>
                                    <li onclick="myFunction()"><a href="#">Russian</a></li>
                                </ul></li>
                        </ul>
                    </li>
                    <li id="ul2" onclick="myFunction()" ><a href="#">VIDEOS</a></li>
                    <li id="ul2"><a href="regform.html">REGISTER</a></li>
                    <li id="ul2"><a href="login.html">LOGIN</a></li>
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
                <h1 align="center">Can vinegar be used to treat tuberculosis?</h1>
                <p style="width: 100%!important; background: #EBD6EB;">
                <img src="images/vinegar_med.jpg" alt="Can vinegar be used to treat tuberculosis?" align="left" border="0" width="205" height="205" style="padding:5px 10px 10px 0px; margin: 5px;">
                    
                                  An international team of researchers has found that an active ingredient in vinegar can effectively kill mycobacteria and even the highly drug-resistant mycobacterium tuberculosis. <br><br>Acetic acid in vinegar might be used as an inexpensive and non-toxic disinfectant against the drug-resistant tuberculosis (TB) bacteria as well as other stubborn, disinfectant-resistant mycobacteria, they found.<br><br>"For now, this is simply an interesting observation. Vinegar has been used for thousands of years as a common disinfectant and we merely extended studies from the early 20th century on acetic acid," explained Howard Takiff, head of the laboratory of molecular genetics at the Venezuelan Institute of Scientific Investigation (IVIC) in Caracas, Venezuela.<br><br>Mycobacteria are known to cause tuberculosis and leprosy, but non-TB mycobacteria are common in the environment, even in tap water, and are resistant to commonly used disinfectants. While investigating the ability of non-TB mycobacteria to resist disinfectants and antibiotics, Takiff's postdoctoral fellow Claudia Cortesia stumbled upon vinegar's ability to kill mycobacteria.<br><br>Testing a drug that needed to be dissolved in acetic acid, Cortesia found that the control with acetic acid alone, killed the mycobacteria she wanted to study.<br><br>"After Claudia's initial observation, we tested for the minimal concentrations and exposure times that would kill different mycobacteria," noted Takiff. "There is a real need for less toxic and less expensive disinfectants that can eliminate TB and non-TB mycobacteria, especially in resource-poor countries," Takiff observed.<br><br>Whether it could be useful in the clinic or labs for sterilizing medical equipment or disinfecting cultures or clinical specimens remains to be determined, said the study published in mBio, the online journal of the American Society for Microbiology.    </p>
            </div>
            <div class="side_main">
            <div class="sidebox">
                <img src="images/best.jpg">
                <ul id="ul">
                    <li onclick="myFunction()"><a href="#">Indian Recipies</a></li>
                    <li onclick="myFunction()"><a href="#">Salad Recipies</a></li>
                    <li onclick="myFunction()"><a href="#">Soups  Recipies</a></li>
                    <li onclick="myFunction()"><a href="#">Continental Recipies</a></li>
                    <li onclick="myFunction()"><a href="#">Snacks Recipies</a></li>
                    <li onclick="myFunction()"><a href="#">Desserts Recipies</a></li>
                </ol>
            </div>
            <div id="login">
                <div id="logdiv">
                    <h1 style="margin: 0px;color: white"> LOGIN </h1></div>
        <form method="get">
            <table cellspacing="2" cellpadding="2" >
                <tr><td>USERNAME</td><td>:</td><td><input id="un" style="width: 175px;" name="uesrname" type="text" required  placeholder='User Name' maxlength="16"> </td></tr>
                <tr><td>PASSWORD</td><td>:</td><td><input style="width: 175px;" name="password" type="password" required  placeholder='Password' maxlength="8"> </td></tr>
                <tr><td colspan="3"><a href>Forgot Password?</a></td></tr>
                <tr><td colspan="2"><button type="submit" style="margin: 10px 10px;" onclick="login()">LOGIN</button></td><td><a href="register.html"><button type="button" style="margin: 10px 10px;" >REGISTER</button></td></a></tr>
            </table>
        </form>
    </div>            
            </div>
            <nav>
                <ul>
                    <li id="ul2"><a href="index.html">HOME</a></li>
                    <li id="ul2" onclick="myFunction()"><a href="#">RECIPES</a>
                        <ul>                            
                            <li onclick="myFunction()"><a href="#">Categories</a>
                                <ul>
                                    <li onclick="myFunction()"><a href="#">Soups</a></li>
                                    <li onclick="myFunction()"><a href="#">Snacks</a></li>
                                    <li onclick="myFunction()"><a href="#">Desert</a></li>
                                    <li onclick="myFunction()"><a href="#">salad</a></li>
                                </ul></li>
                            <li onclick="myFunction()"><a href="#">Cuisine</a>
                                <ul>
                                    <li onclick="myFunction()"><a href="#">Indian</a></li>
                                    <li onclick="myFunction()"><a href="#">Continental</a></li>
                                    <li onclick="myFunction()"><a href="#">Chinese</a></li>
                                    <li onclick="myFunction()"><a href="#">Mexican</a></li>
                                    <li onclick="myFunction()"><a href="#">Russian</a></li>
                                </ul></li>
                        </ul>
                    </li>
                    <li id="ul2" onclick="myFunction()"><a href="#">VIDEOS</a></li>
                    <li id="ul2"><a href="regform.html">REGISTER</a></li>
                    <li id="ul2"><a href="login.html">LOGIN</a></li>
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
                 <p style=" font-size: 20px;color: orange;">E-MAIL : aniket@forkfullfood.com<br><br><br>
                 CONTACT NO: +91&nbsp9029921941</p>
            </div>
            <div style="clear:both; text-align: center; font-size: 18px; font-family: calibri;">© Copyright Forkfull Food Convergence Limited 2014 All rights reserved.</div>
                
            </div>
        </div>
    </body>
</html>