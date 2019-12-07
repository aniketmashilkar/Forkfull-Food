<html>
	<?php
	session_start();
	if(isset($_SESSION['id']))
        {
            require_once 'logout.php';
        }
	if(!(isset($_SESSION['Aid']) && $_SESSION['Aid'] != ''))
	    {
			echo "reach here";
	        header("location:index.php");
	    }
	?>
    <head>
        <title>Delete User's</title> 
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="style2.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="javascript.js"></script>  		
    </head>
    <body>
        <div id="div_main" > 
		 <div id="head"></div>
            <nav>
                <ul>
                    <li id="ul3"><a href="adminindex.php">HomePage</a></li>
                    <li id="ul3"><a href="#">Manage Recipes</a>
						<ul>                            
							<li><a href="adaddres.php">Add Recipes</a></li>
						    <li><a href="updaterec.php">Update Recipes</a></li>
							<li><a href="deleterec.php">Delete Recipes</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Manage Videos</a>
						<ul>                            
							<li><a href="adaddvideos.php">Add Videos</a></li>
							<li><a href="#">Delete Videos</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Manage User</a>
						<ul>                            
						    <li><a href="updateusr.php">Update User</a></li>
							<li><a href="deleteusr.php">Delete User</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Account</a>
						<ul>                            
						    <li><a href="adminpanel.php">Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
                </ul>
			</nav>
			<div id="mainbody">
                <div id="add_res">
				<h2>Delete User</h2>
				<form name="db3" action="deleteu.php" method="POST">
					 Enter Name: <br>
					<input type="text" name="name"></input><br>
					
					<input type="submit" name="submit" value="Delete"/>
				</form>
				<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>NAME</th>
					<th>E-MAIL</th>
					<th>DATE OF BIRTH</th>
					<th>ADDRESS</th>
					<th>GENDER</th>
					<th>PHOTOS</th>
				</tr>
				<?php
					ERROR_REPORTING(E_ALL^E_NOTICE);
					require_once 'database.php';
					
					$query = 'SELECT * FROM users ';
					$res = $db->query($query);
					
					while($result=$res->fetch())
					{
					
					?>
						<tr>
						<td><?php
						 echo $result['username'];?>
						</td>
						<td><?php
						 echo $result['emailid'];?>
						</td>
						<td><?php
						 echo $result['birthdate'];?>
						</td>
						<td><?php
						 echo $result['address'];?>
						</td>
						<td><?php
						 echo $result['Gender'];?>
						</td>
						<td>
							<img src="avtars/<?php echo $username?>.png" height = "160" width = "160">
						</td>
						</tr>
						<?php
						//$result = $res->fetch();
					}
				?>
				
				</table>
			</div>
		</div>	
            <nav>
                <ul>
                    <li id="ul3"><a href="adminindex.php">HomePage</a></li>
                    <li id="ul3"><a href="#">Manage Recipes</a>
						<ul>                            
							<li><a href="adaddres.php">Add Recipes</a></li>
						    <li><a href="updaterec.php">Update Recipes</a></li>
							<li><a href="deleterec.php">Delete Recipes</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Manage Videos</a>
						<ul>                            
							<li><a href="adaddvideos.php">Add Videos</a></li>
							<li><a href="#">Delete Videos</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Manage User</a>
						<ul>                            
						    <li><a href="updateusr.php">Update User</a></li>
							<li><a href="deleteusr.php">Delete User</a></li>
						</ul>
					</li>
                    <li id="ul3"><a href="#">Account</a>
						<ul>                            
						    <li><a href="adminpanel.php">Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
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