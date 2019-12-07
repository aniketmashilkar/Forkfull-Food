<html>
<?php
session_start();
if(isset($_SESSION['id']))
     {
        //echo "<script>confirm(\"Admine is login \n first logout and  user \")</script>";
        require_once 'logout.php';

     }
if(!(isset($_SESSION['Aid']) && $_SESSION['Aid'] != ''))
    {
        echo "reach here";
         header("location:adminpanel.php");
     }
?>
<script src="check_validate.js"></script>
    <head>
        <title>Admin Hompage</title> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style2.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="javascript.js"></script>        
    </head>
    <?php
    error_reporting(E_ALL^E_NOTICE);
        $id = $_GET['id'];
        echo 'id is='.$id;
        require_once'database.php';
        $query = "SELECT * FROM users where id = '$id'";
        echo $query;
        $res = $db->query($query);
        while($result=$res->fetch())
        {
            $name = $result['username'];
            $email = $result['emailid'];
            $dob = $result['birthdate'];
            $address = $result['address'];
            $gender = $result['Gender'];
            $joined = $result['joined'];
        }
    ?>
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
                            <li><a href="#">Update User</a></li>
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
                    <h1 style="font-size:50px;border-bottom: 1px dotted;color: black;" align="center">UPDATE USERS DETAILS</h1> 
                    <form method="post" action="" enctype="multipart/form-data">
                    <table cellspacing="5" cellpadding="10"> 
                    <tr><td>NAME</td><td>:</td><td><input class="input" id = "username" type="username" name = "username" value ="<?php echo $name; ?>" onblur = "validate('username',this.value);" "text" required placeholder='Name'></td></tr> 
                    <tr><td><div id = "status"></div>
                    <tr><td>E-MAIL ID</td><td>:</td><td><input class="input" id="email" type="email" name = "email" value ="<?php echo $email; ?>" onblur = "validate('email',this.value);" required placeholder='Email id'></td></tr> 
                    <tr><td>ADDRESS</td><td>:</td><td><textarea  class="textarea" id = "address" name= "address" onblur = "validate('address',this.value);" rows="8" cols="50" required><?php echo $address;?></textarea></td></tr>
                    <tr><td>GENDER</td><td>:</td><td><input type="radio" name="gender" id="gender" value="male" <?php if ($gender == 'male') echo 'checked="checked"';?>" onblur = "validate('gender',this.value);"><b>MALE</b><input type="radio" id="gender" name="gender" value="female" <?php if ($gender == 'female') echo 'checked="checked"'; ?>" onblur = "validate('gender',this.value)" value="female"><b>FEMALE</b></td></tr> 
                    <tr><td>DATE OF BIRTH</td><td>:</td><td><input class="input" name="date" id ="date" value ="<?php echo $date;?>" onblur = "validate('data',this.value);"  type="date" required ></td></tr>
                    <tr><td>PHOTOS/VIDEOS</td><td>:</td><td><input class="input" name = "avtar" type="file" ></td></tr> <tr><td colspan="2">
                    <input type="submit" value="submit" name="submit" value = "SUBMIT"></td><td><button type="reset">CLEAR</button></td></tr> </table>
                    </form>
                </div> 
            </div>
            
            <?php
                if(isset($_POST['name']))
                {
                require_once 'database.php';
                $name = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $address = htmlspecialchars($_POST['address']);
                $gender = htmlspecialchars($_POST['gender']);
                $date = htmlspecialchars($_POST['date']);
            
            if(empty($name) || empty($email) || empty($address) || empty($gender) || empty($date))
            {
                exit();
            }
            if (!empty($_FILES['avtar']) && $_FILES['avtar']['error'] == UPLOAD_ERR_OK)
            {
                
                $ext = explode('.', $_FILES['image']['name']);
                $ext = end($ext);
                echo $ext;
                $allow_ext = array('jpg','jpeg','png');
                $allow_type = array('image/jpeg', 'image/jpg', 'image/png');
                
                $tmp= $_FILES['avtar']['tmp_name'];//stores file in xamp/temp folder
                
                $path = getcwd();//current working directory
                
                $name = $path.'\avtars'.DIRECTORY_SEPARATOR.$username.'.png'.$ext;
                
                $sucess = move_uploaded_file($tmp,$name);
                    if (in_array($ext,$allow_ext))
                    {
                        //$sucess = move_uploaded_file($tmp,$name);
                        echo "reach hear";
                    }
                    if($sucess)
                {
                    print("sucessfull!!<br>");
                }
            }
                $query = "UPDATE `users` SET `username`='$name',`emailid`='$email',`birthdate`='$date',`address`='$address',`Gender`='$gender' WHERE id='$id'";
                $db->exec($query);
            }
    
                //header("Location:index.php");
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
                            <li><a href="#">Update User</a></li>
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