<?php
    
    require 'config.php';
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>login pages</title>
    <link rel="stylesheet" href="style1.css">
</head>
    <body style="background-color:#7f8c8d">
        <div id="main-wrapper">

            <center>
                <h1>Registration form</h1>
            </center>
            

            <form class="myform" action="register.php" method="post">
                <label ><b>Username:</b></label>
                <input name="username" type="text" class="inputvalues" placeholder="type your username"required/><br>
                <label ><b>Password</b></label>
                
                <input name="password" type="password" class="inputvalues" placeholder=" your password"required/><br>
                <label ><b> Confirm Password</b></label>
                <input name="cpassword" type="password" class="inputvalues" placeholder="confirm password"required/><br>
                <input name="submit_btn" type="submit" id="sign_button" value="Sign in"/><br>
                <a href="login.php"><input type="button" id="back_button" value="<<Go Back"/></a>
            </form>

            <?php
                if(isset($_POST['submit_btn']))
                {
                    //echo '<script type="text/javascript"> alert('sign up button clicked') </script>';
                
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['cpassword'];

                        if($password==$cpassword)
                        { 
                            $query= "select * from userinfo WHERE username='$username'";
                            $query_run = mysqli_query($con,$query);
                            
                            if(mysqli_num_rows($query_run) > 0)
                            {
                            // there is already a user with the same username
                                echo '<script type="text/javascript"> alert("userinfo exixst ..try another user name") </script>';
                            }
                            {
                                    $query="insert into userinfo values('$username','$password')";
                                    $query_run = mysqli_query($con,$query);


                                    if($query_run)
                                    {
                                        echo'<script type="text/javascript"> alert("userinfo register...goto login page") </script>';
											header("Location: login.php?registration=success");
                                    }
                                
                                    else
                                    {
                                        echo'<script type="text/javascript"> alert("ERROR!") </script>';
                               }   }     
                            }
                            
                            else{
                                echo'<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';
                        }
                    }
                    
            ?>

       </div>
   </body>
</html>