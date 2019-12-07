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
        <title>Admin Add Videos</title> 
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
                     <h1 style="font-size:50px;border-bottom: 1px dotted;color: #99CC00;" align="center">ADD YOUR VIDEOS</h1> 
                     <form method="POST" action = ""> 
                        <table cellspacing="5" cellpadding="10"> 
                            <tr><td><b>TITLE</b></td><td>:</td><td>
                                <input class="input" type="text" id="title" name="title"required placeholder='Title'></td></tr> 
                            <tr><td><b>INGREDIENTS</b></td><td>:</td><td>
                                <textarea  id="ingred" class="textarea" name = "area" rows="8" cols="50" required></textarea>
                            </td></tr>
                             <tr><td><b>TYPE</b></td><td>:</td><td>
                                <input type="radio" name="types" value="veg"><b>VEG.</b>
                                <input type="radio" name="types" value="non-veg"><b>NON-VEG.</b>
                            </td></tr> 
                            <tr><td><b>COOKTIME</b></td><td>:</td><td>
                                <input  class="input" type="text" id="ctime" name = "ctime" required></td></tr>
                                 <tr><td><b>VIDEOS</b></td><td>:</td><td>
                                    <input class="input" type="file" name = "vid" ></td></tr>
                                     <tr><td colspan="2">
                                        <button type="submit" name ="videosubmit"onclick="validate()">SUBMIT</button></td><td>
                                        <button type="reset">CLEAR</button></td></tr> 
                                    </table> </form> </div> 
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
                <form method="post" action = "">
            <table cellspacing="2" cellpadding="2" >
                <tr><td>NAME :</td></tr>
                <tr><td colspan="2"><input style="width: 340px;" type="text"  name = "name" required  placeholder='Name' maxlength="16"> </td></tr>
                <tr><td>EMAIL :</td></tr>
                <tr><td><input style="width: 340px;" type="email" name = "email" required  placeholder='Email Address'> </td></tr>
                <tr><td >COMMENT :</td></tr>
                <tr><td colspan="2"><textarea cols="40" rows="5" name = "area" required placeholder='Comments'></textarea></td></tr>
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
<?php
    if(isset($_POST['videosubmit']))
    {
        error_reporting(E_ALL^E_NOTICE);
        $name = $_POST['title'];
        
        $area = $_POST['area'];
        $type = $_POST['types'];
        $ctime = $_POST['ctime'];
        $target_dir = getcwd();
        print_r($_FILES['vid']);
        echo $_FILES["video"]["name"];
        $target_file = '\videos'.DIRECTORY_SEPARATOR.$_FILES["video"]["name"];
        echo $target_file;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        echo $imageFileType;
 
        if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
        {
            echo "File Format Not Suppoted";
        } 

        else
        {
 
            $video_path=$_FILES['video']['name'];
 
            $query = "INSERT INTO `advideo`(`TITLE`, `INGREDIENTS`, `TYPE`, `COOKTIME`, `VIDEOS`) VALUES ('$title','$area','$type','$ctime','$video_path')";
 
            move_uploaded_file($_FILES["video"]["tmp_name"],$target_file);
    
            echo "uploaded ";
 
        }
 
        
    }
?>