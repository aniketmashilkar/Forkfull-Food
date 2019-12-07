<html>
<?php
session_start();
if((isset($_SESSION['Aid']) && $_SESSION['Aid'] != ''))
    {
         header("location:adminpanel.php");
     }
?>
    <head>
        <title>ADMIN LOGIN</title>  
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
		
    </head>
	<style>
		.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
	}

	img.avatar {
    width: 40%;
    border-radius: 50%;
	}

	</style>
   <body>
   <?php
		ERROR_REPORTING(E_ALL^E_NOTICE);
   ?>
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

			<div align="center" >
					<div id="logtemp">
					<h1 style="font-size:50px;border-bottom: 1px dotted;color: black;" align="center">ADMIN LOGIN</h1>
					<div class="imgcontainer">
					<img src="images/adminavatar.png" alt="Avatar" class="avatar">
					</div>
					<form method="POST" action="#" >
					<table cellspacing="2" cellpadding="2" >
						<tr><td><b>USERNAME: </b></td><td>:</td><td><input style="width: 175px;" name="username" type="text" required  placeholder='User Name' > </td></tr>
						<tr><td><b>PASSWORD: </b></td><td>:</td><td><input style="width: 175px;" name="password" type="password" required  placeholder='Password' > </td></tr>
						<tr><td colspan="3"><input type="checkbox" checked="checked"> Remember me</td></tr>
						<tr><td colspan="2"><input type="submit" value="LOGIN"  name="submit"  /></td></tr>
					</table>
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
                <form method="post">
            <table cellspacing="2" cellpadding="2" >
                <tr><td>NAME :</td></tr>
                <tr><td colspan="2"><input style="width: 340px;" type="text" required  placeholder='Name' maxlength="16"> </td></tr>
                <tr><td>EMAIL :</td></tr>
                <tr><td><input style="width: 340px;" type="email" required  placeholder='Email Address'> </td></tr>
                <tr><td >COMMENT :</td></tr>
                <tr><td colspan="2"><textarea cols="40" rows="5" required placeholder='Comments'></textarea></td></tr>
                <tr><td colspan="2"><button type="submit" name = "submit2" style="margin: 10px 10px;">SUBMIT</button></td></tr>
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

        
		if(isset($_POST['submit']))
        {
            
            require_once"database.php";
           
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM admin WHERE adminname = '$username'";
            $query;
            $records = $db->prepare($query);
            //$records->bindParam(':username', $username);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            
            if(count($results) > 0 && password_verify($password , $results['PASSWORD']))
            {   
                $id=$results['id'];
                $_SESSION['Aid'] = $id;
               
                
                ?>
                    <script type="text/javascript">
                        window.location="adminindex.php";
                    </script>>
                <?php
            }else
            {
                echo '<script>alert(`AdminName and Password are Invalid`)</script>';
            }
                
        }

        

	?>		
    </body>
</html>