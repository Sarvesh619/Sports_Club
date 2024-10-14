<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard </title>
  <link rel="stylesheet" href="../css/dash1.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="../images/sportlogo.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="dashboard.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="showbooked.php">
          <i class="fas fa-book-open"></i>
          <span class="nav-item">Show Booked</span>
        </a></li>
        <li><a href="showbookedCourse.php">
          <i class="fas fa-book-open"></i>
          <span class="nav-item">Show Booked Course</span>
        </a></li>
        <div class="dropdown">
  <button class="dropdown-btn">SPORTS</button>
  <div class="dropdown-content">
    <a href="AddSport(2).php">Add Sport</a>
    <a href="showSport.php">Delete Sport</a>
    
  </div>
</div>
<div class="dropdown">
        <button class="dropdown-btn">PLANS</button>
  <div class="dropdown-content">
    <a href="AddPlan.php">Add Plan</a>
    <a href="showplan.php">Delete Plan</a>
  </div>
</div>
<div class="dropdown">
<button class="dropdown-btn">SCHEDULE</button>
  <div class="dropdown-content">
    <a href="AddSchedule.php">Add Schedule</a>
    <a href="delschedule.php">Delete Schedule</a>
  </div>
</div>
<div class="dropdown">
<button class="dropdown-btn">EMPLOYEE</button>
<div class="dropdown-content">
<a href="AddEmp.php">Add Employee</a>
<a href="viewemp.php">Delete Employee</a>
 </div>
</div>
<div class="dropdown">
<button class="dropdown-btn">COURSE</button>
<div class="dropdown-content">
<a href="AddCourse.php">Add Course</a>
<a href="showcourse.php">Delete Course</a>
 </div>
</div>
<div class="dropdown">
<button class="dropdown-btn">TOURNAMENT</button>
<div class="dropdown-content">
<a href="AddTournament.php">Add Tournament</a>
<a href="showTour.php">Delete Tournament</a>
 </div>
</div>
<div class="dropdown">
<button class="dropdown-btn">TOURNAMENT SCHEDULE</button>
<div class="dropdown-content">
<a href="SelectT.php">Add Tournament Schedule</a>
<a href="showTournamentR.php">Delete Tournament Schedule</a>
 </div>
</div>
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
       





<?php
        include('connection.php');
        $sql = "SELECT * from sports";
         $query1= mysqli_query ($connection, $sql);
        if(isset($_POST['addemp'])){
                include('connection.php');
                $sport=$_POST['sport'];
                $empname=$_POST['empname'];
                $emprole=$_POST['emprole'];
                $query5="select * from emp where (ename='$empname' AND role='$emprole')";
                $query_run5 = mysqli_query($connection,$query5);
                if(mysqli_num_rows($query_run5)>0){
                    echo "<script type='text/javascript'>
                    alert('This employee is already Available');
                    window.location.href = 'AddEmp.php';  
                    </script>";
                }
                else{
            $query = "insert into emp values(null,'$_POST[empname]','$_POST[emprole]','$_POST[sport]')";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
              echo "<script type='text/javascript'>
                  alert('Added employee Successfully');
                window.location.href = 'AddEmp.php';  
              </script>";
            }
          }
           
          }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Add Employee</div>
    <div class="content">
      <form action=" " method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter Employee Name" name="empname" required>
          </div>
          <div class="input-box">
            <span class="details">Enter Employee Role</span>
            <input type="text" placeholder="Enter Employee Role" name="emprole" required>
          </div><br>
          <div class="input-box">
            <span class="details">Select Sport</span>
            <select  name='sport' required>
            <?php

while ($row = mysqli_fetch_array(
                    $query1,MYSQLI_ASSOC)):;

    ?>
        <option value="<?php echo $row['sid'];
        ?>">
                   <?php echo $row['sname'];?>
        </option>
    <?php
  endwhile;
    ?>
        <div class="button"><br><br>
          <input type=""  name="addemp"  value="Select Sport">
        </div>
        <div class="button"><br><br>
          <input type="submit"  name="addemp"  value="Add Employee">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: contents;
}
.container{
  padding-left: 0%;
  border-radius: 15px;
  background-color:none;
  
}
.content{
  padding-inline-end: 5%;
  padding-inline-start: 5%;
  padding-top: 15%;
  padding-bottom: 27%;
  width:100%;
  
}
.container .title{
  font-size: 25px;
  color:cyan;
  font-weight: 500;
  text-align: center;
}
.user-details{
font-style: normal;
font-size: 20px;
color:cyan;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: rgb(9, 157, 137);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  color: blue;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 105px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
form .button input{
   height: 40%;
   width: 110%;
   margin-right: 2vh;
   margin-bottom: 2vh;
   border-radius: 5px;
   border: none;
   color: black;
   font-size: 20px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: cyan;
 }
 form .button input:hover{
  background: black;
  color: white
  }
   @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.container{
  display: flex;
  color: violet;
  font-size: 12px;
}
.main-top h1{
  font-size: 150px;
  color: cyan;
}
.main{

width: 82%;
background: url(../images/neon.jpg);
background-size: 120%;
}
nav{
  height: 120vh;
  left: 0;
  top: 0;
  background:url(../images/black.jpg);
  background-size: 480%;
  box-shadow: 0 5px 15px blueviolet;
  width: 280px;
  overflow: hidden;
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  font-size: 16px;
  display: table;
  width: 280px;
  padding: 10px;
  color: violet;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: cornflowerblue;
  color: rgb(4, 53, 48);
  background-size: 150%;
  border-radius: 35px;
}
.logout{
  position: absolute;
  bottom: 10;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}
.dropdown {
  position: relative;
  display: inline-block;
  margin-top: 4vh;
}


.dropdown-btn {
background-color: cornflowerblue;
color: black;
padding: 8px;
border-radius: 25px;
width: 250px;
cursor: pointer;
margin-left: 2vh;
font-size: 2vh;
}

.dropdown-btn:hover{
background-color: violet;
color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: cyan;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 25px;
  margin-left: 50px;
}


.dropdown-content a {
  color: #333;
  text-decoration: none;
  display: block;
  font-size: 2vh;
  width: 180px;
  margin: auto;
}


.dropdown-content a:hover {
  background-color: black;
  color: cyan;
}


.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 20px;
  text-align: center;
}

.dropdown:hover .dropdown-content a{
display: block;
border-radius: 20px;
text-align: center;
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.container{
  display: flex;
  color: violet;
  font-size: 12px;
}
.main-top h1{
  font-size: 150px;
  color: cyan;
}
.main{

width: 82%;
background: url(../images/neon.jpg);
background-size: 120%;
}
nav{
  height: 120vh;
  left: 0;
  top: 0;
  background:url(../images/black.jpg);
  background-size: 480%;
  box-shadow: 0 5px 15px blueviolet;
  width: 280px;
  overflow: hidden;
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  font-size: 16px;
  display: table;
  width: 280px;
  padding: 10px;
  color: violet;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: cornflowerblue;
  color: rgb(4, 53, 48);
  background-size: 150%;
  border-radius: 35px;
}
.logout{
  position: absolute;
  bottom: 10;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}
.dropdown {
  position: relative;
  display: inline-block;
  margin-top: 4vh;
}


.dropdown-btn {
background-color: cornflowerblue;
color: black;
padding: 8px;
border-radius: 25px;
width: 250px;
cursor: pointer;
margin-left: 2vh;
font-size: 2vh;
}

.dropdown-btn:hover{
background-color: violet;
color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: cyan;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 25px;
  margin-left: 50px;
}


.dropdown-content a {
  color: #333;
  text-decoration: none;
  display: block;
  font-size: 2vh;
  width: 180px;
  margin: auto;
}


.dropdown-content a:hover {
  background-color: black;
  color: cyan;
}


.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 20px;
  text-align: center;
}

.dropdown:hover .dropdown-content a{
display: block;
border-radius: 20px;
text-align: center;
}


</style>