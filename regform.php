<html>
    <head>
        <title>Registration</title> 
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">  		
    </head>
	<script src="check_validate.js"></script>
	<?php
		ERROR_REPORTING(E_ALL^E_NOTICE);
		
	?>
    <body>
        <div id="div_main" > 
		 <div id="head"></div>

            <nav>
                <ul>
                    <li id="ul2"><a href="index.php">HOME</a></li>
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
                    <li id="ul2"><a href="#">REGISTER</a>
                        <ul><li><a href="regform.php">Add your Details</a></li></ul></li>
                    <li id="ul2"><a href="#">LOGIN</a>
                        <ul>
                            <li><a href="login.php">USER</a>
                            <li><a href="adlogin.php">ADMIN</a>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div id="mainbody">
                <div id="add_res">
					<h1 style="font-size:50px;border-bottom: 1px dotted;color: black;" align="center">ADD YOUR DETAILS</h1> 
					<form method="post" action="regform.php" enctype="multipart/form-data">
					<table cellspacing="5" cellpadding="10"> 
					<tr><td>YOUR NAME</td><td>:</td><td><input class="input" id = "username" type="username" name = "username" onblur = "validate('username',this.value);" "text" required placeholder='Name'></td></tr> 
					<tr><td><div id = "status"></div>
					<tr><td>E-MAIL ID</td><td>:</td><td><input class="input" id="email" type="email" name = "email" onblur = "validate('email',this.value);" required placeholder='Email id'></td></tr> 
					<tr><td>PASSWORD</td><td>:</td><td><input class="input" id="password1" type="password" name = "password1" onblur = "validate('password1',this.value);"  required></td></tr>
					<tr><td>CONFIRM PASSWORD</td><td>:</td><td><input class="input" id = "password2" type="password" name = "password2" onblur = "validate('password2',this.value);"  required></td></tr>
					
					<tr><td>ADDRESS</td><td>:</td><td><textarea  class="textarea" id = "address" name= "address" onblur = "validate('address',this.value);" rows="8" cols="50" required></textarea></td></tr>
					<tr><td>GENDER</td><td>:</td><td><input type="radio" name="gender" id="gender" onblur = "validate('gender',this.value);" value="male">MALE<input type="radio" id="gender" name="gender" onblur = "validate('gender',this.value)" value="female">FEMALE</td></tr> 
					<tr><td>DATE OF BIRTH</td><td>:</td><td><input  class="input" name="date" id = "date" onblur = "validate('data',this.value);"  type="date" required ></td></tr>
					<tr><td>PHOTOS/VIDEOS</td><td>:</td><td><input class="input" name = "avtar" type="file" ></td></tr> <tr><td colspan="2">
					<input type="submit" value="submit" name="Add Recipes" value = "SUBMIT"></td><td><button type="reset">CLEAR</button></td></tr> </table>
					</form>
				</div> 
            </div>
           
            <nav>
                <ul>
                    <li id="ul2"><a href="index.php">HOME</a></li>
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
                    <li id="ul2"><a href="#">REGISTER</a>
                        <ul><li><a href="regform.php">Add your Details</a></li></ul></li>
                    <li id="ul2"><a href="#">LOGIN</a>
                        <ul>
                            <li><a href="login.php">USER</a>
                            <li><a href="adlogin.php">ADMIN</a>
                        </ul>
                    </li>
                </ul>
            </nav>
           
			<div id="foot">
               <div style="float: left; margin: 5px 10px;">
                <p style="border-bottom: 4px solid;">COMMENTS :</p>
                <form method="post" action="regform.php">
            <table cellspacing="2" cellpadding="2" >
                <tr><td>NAME :</td></tr>
                <tr><td colspan="2"><input style="width: 340px;" type="text" name = "text" required  placeholder='Name' maxlength="16"> </td></tr>
                <tr><td>EMAIL :</td></tr>
                <tr><td><input style="width: 340px;" type="email" name = "email" required  placeholder='Email Address'> </td></tr>
                <tr><td >COMMENT :</td></tr>
                <tr><td colspan="2"><textarea cols="40" rows="5" name = "textarea" required placeholder='Comments'></textarea></td></tr>
                <tr><td colspan="2"><button type="submit" name = "comment" style="margin: 10px 10px;">SUBMIT</button></td></tr>
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
        <?php
           require_once"confirm_form.php";

        ?>  
    </body>
    
</html>