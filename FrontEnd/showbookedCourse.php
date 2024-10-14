
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
<a href="#">Delete Course</a>
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

<div class="main">
<?php
  //session_start();
  include('connection.php');
  $query = "select * from enrollc";
  $query_run = mysqli_query($connection,$query);
  $sn = 0;

  echo "<center><h4><u>List Of All Booked Course</u></h4></center><br>";
  echo "<center><table class='table' border=1 width=1000>
    <tr>
      <th width=100>S.No</th>
      <th width=100>User Name</th>
      <th width=100>Course Name</th>
      <th width=100>Fee</th>
      <th width=100>No of Days</th>
      <th width=100>Enrolled Date</th>
      <th width=100>Show Receipt</th>
      <th width=100>Action</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $query1="select cname,days from course where cid=$row[cid]";
    $query1_run=mysqli_query($connection,$query1);
    while($row2 = mysqli_fetch_assoc($query1_run)){
    $sn = $sn + 1;
    $id = $row['eid'];
    echo "
      <tr width=100>
        <td>$sn</td>
        <td>$row[user]</td>
        <td>$row2[cname]</td>
        <td>$row[fee]</td>
        <td>$row2[days]</td>
        <td>$row[enrolldate]</td>
        <td><a href='payment_receipt1.php?fee_payment_id=$id'>Show Receipt</a></td>
        <td><a href='deleteBookedCourse.php?eid=$id' onclick='return deleteconfirmation()'>Delete</a></td>
      </tr>
    ";
  }
}
  echo "</table></center>";

?>



      </div>
</body>
</html>


<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    font-family: 'Roboto', sans-serif;
}
table {
  margin-left: 1vh;
}
th,
td {
    border-bottom: 1px solid black;
    padding: 10px 30px;
    column-width: 110px;
    font-size: 15px;
    font-weight: 500;
    border-radius: 0px;
}
th,
td a {
  color: purple;
}

tr:nth-child(even) {
    background-color: white;
    color: black;
}

tr:nth-child(odd) {
    background-color: black;
    
}

tr:hover td {
    color: black;
    cursor: pointer;
    background-color: red;
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
<script>
function deleteconfirmation()
{
	if(confirm("Are you sure want to delete this record??") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>