<html>
    <?php
        session_start();
        if(!(isset($_SESSION['Aid']) && $_SESSION['Aid'] != ''))
        {
    		echo "reach here";
            header("location:index.php");
        }
    ?>
    <head>
        <title>Admin Add Recipes</title> 
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
                <img src="images/community_send_recipe_icon.jpg" style="float: left;" align="center">
                <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">ADD YOUR RECIPIES</h1>
                <form method="post" action="adaddres.php" enctype="multipart/form-data" >
                <table cellspacing="5" cellpadding="10">
                <tr><td><b>TITLE</b></td><td>:</td><td><input class="input" type="text" name="title" id="title" required placeholder='Title'></td></tr>
                <tr><td><b>INGREDIENTS</b></td><td>:</td><td><textarea  id="ingred" name="ingred" class="textarea" rows="8" cols="50" required></textarea></td></tr>
                <tr><td><b>METHOD</b></td><td>:</td><td><textarea id="method" name="method" class="textarea" rows="8" cols="50" required></textarea></td></tr>
                <tr><td><b>TYPE</b></td><td>:</td><td><input type="radio" name="types" value="veg"><b>VEG.</b><input type="radio" name="types" value="non-veg"><b>NON-VEG.</b></td></tr>
                <tr><td><b>COOKTIME</b></td><td>:</td><td><input  class="input" name="ctime" type="text" id="ctime" required></td></tr>
                <tr><td><b>PHOTOS</b></td><td>:</td><td><input class="input" name = "recps" type="file" ></td></tr>
                <tr><td colspan="2"><input type="submit" value="submit" name="adrecps" value = "SUBMIT"></td><td><button type="reset">CLEAR</button></td></tr> </table>
                </form> </div> 
            </div>
            <?php
                if(isset($_POST['adrecps']))
                {
                require_once 'database.php';
                $title = htmlspecialchars($_POST['title']);
                $ingred = htmlspecialchars($_POST['ingred']);
                $method = htmlspecialchars($_POST['method']);
                $types = htmlspecialchars($_POST['types']);
                $ctime = htmlspecialchars($_POST['ctime']);
            
            if(empty($title) || empty($ingred) || empty($method) || empty($types) || empty($ctime))
            {
                exit();
            }
            if (!empty($_FILES['recps']) && $_FILES['recps']['error'] == UPLOAD_ERR_OK)
            {
                
                $ext = explode('.', $_FILES['recps']['name']);
                $ext = end($ext);
                
                $allow_ext = array('jpg','jpeg','png');
                $allow_type = array('image/jpeg', 'image/jpg', 'image/png');
                
                $tmp= $_FILES['recps']['tmp_name'];//stores file in xamp/temp folder
                
                $path = getcwd();//current working directory
                
                $name = $path.'\adrecipes'.DIRECTORY_SEPARATOR.$title.'.png';
                
                
                if (in_array($ext,$allow_ext))
                {
                    $sucess = move_uploaded_file($tmp,$name);
                }
                    
            }
            $upload_date = date('Y-m-d H:i:s');
            $query = "INSERT INTO adrecp (TITLE, INGREDIENTS, METHOD, TYPE, COOKTIME, upload) 
            VALUES ('$title','$ingred', '$method', '$types', '$ctime', '$upload_date' )";
            
            $db->exec($query);
                }
            ?>
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