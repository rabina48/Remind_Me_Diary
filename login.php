<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>login pages</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body style="background-color:#7f8c8d">
<div id="main-wrapper">

    <center>
        <h1>Login form</h1>
        <img src="img/index.png" class="index"/>
    </center>
    

 <form class="myform" action="login.php" method="post">
    <input type = "hidden" name="login" value="1">
    <label ><b>Username:</b></label>
    <input type="text" class="inputvalues" placeholder="Type your username" name="username"/><br>
    <label ><b>Password</b></label>
    <input type="password" class="inputvalues" placeholder="Type your password" name="password"/><br>
    <input type="submit" id="login_button" value="Login"/><br>
   <a href="register.php"> <input type="button" id="resister_button" value="Register"/></a>
</form>

<?php 
if (isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query= "select * from userinfo WHERE username='$username'AND password='$password' ";
   
    $query_run = mysqli_query($con,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
        //valid
        $_SESSION['username']=$username;
       // echo "Logged in";
        header('location:page.html');
        exit;
    
    }
    else
    {
        //invalid
        echo '<script type="text/javascript"> alert("invaild id") </script>';
        
    }
}
?>

    </div>



</body>
</html>

