<?php
	// session_start();
  if(isset($_POST['register'])){
    include('connection.php');
    $query = "insert into users values(null,'$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[mobile]','$_POST[password]','$_POST[gender]')";
  	$query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
      	alert('User registered successfully ');
        window.location.href = 'index.php';  
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Error...Plz try again.');
      	window.location.href = 'signup.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action=" " method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">mobile</span>
            <input type="tel" placeholder="Enter your number" name="mobile" pattern="^\d{10}$" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="confirm password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male" checked>
          <input type="radio" name="gender" id="dot-2" value="female" >
          <input type="radio" name="gender" id="dot-3" value="other" >
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit"  name="register"  value="signup">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
