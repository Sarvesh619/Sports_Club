<?php
   include('connection.php');
    
    if(isset($_POST['login'])){
    
        $uname = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from admin where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($connection,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: dashboard.php');
            }else{
                echo "Invalid username and password";
            }
    
        }
    
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SPORTS CLUBLogin Form</title>
    <link rel="stylesheet" href="../css/adminlogin.css">
    
  </head>
  <body>

    <div class="wrapper">
    </div>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
            <span></span>
          <label>Password</label>
        </div>
        <div class="pass"></div>
        <input type="submit" onclick="window.location.href ='dashboard.php'" class="pass" name="login">
        <!--<div class="signup_link">
          Not a member? <a href="signup.html">Signup</a>
        </div>-->
      </form>
    </div>

  </body>