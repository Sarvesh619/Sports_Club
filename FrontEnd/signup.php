<?php
	// session_start();
  if(isset($_POST['register'])){
    if($_POST['password']!=$_POST['cpassword']){
      echo "<script type='text/javascript'>
          alert('Enter Confirm Pssword Correctly');
          window.location.href = 'signup.php';  
        </script>";
    }
    include('connection.php');
    $query1="select mobile from users";
    $query_run1 = mysqli_query($connection,$query1);
    while($row = mysqli_fetch_assoc($query_run1))
      { $mobile=$_POST['number'];
        if($mobile==$row['mobile']){
          echo "<script type='text/javascript'>
          alert('Duplicate Mobile number are not allowed....');
          window.location.href = 'signup.php';  
        </script>";
        }
      }
    $query = "insert into users values(null,'$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[mobile]','$_POST[password]','$_POST[gender]')";
  	$query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
      	alert('User registered successfully login to see the Sports');
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
    <link rel="stylesheet" href="../css/signup1.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">SIGN UP</div>
    <div class="content">
      <form action=" " method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" pattern="[A-Za-z]+" title="Name contain alphabets" required>
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
            <span class="details">Phone Number</span>
            <input type="tel" name="mobile" placeholder="Enter Mobile No." maxlength=10 pattern="^\d{10}$" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" placeholder="Choose Password" 
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" placeholder="Choose Password" 
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male" checked>
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="other">
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
