<?php
session_start();
if(!isset($_SESSION['uname'])){
echo "you are logged out";
	header('location:userlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SPORTS CLUB</title>
	<link rel="stylesheet" href="#">
</head>
<body>
	
	<div class="wrapper">
			<nav class="navbar">
				<!--<img class="logo" src="../images/premierlogo.png">-->
				<ul>
					<li><a href="index.php">Index</a></li>
					<li><a class="active" href="">HOME</a></li>
					<li><a href="plan.html">Plan Details</a></li>
					<li><a href="Book.php">Booked Details</a></li>
					<li><a href="viewSport.php">SPORTS</a></li>
					<li><a href="viewCourse.php">Course</a></li>
					<li><a href="BookCourse.php">Booked Course</a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul>
				
			</nav>
			<div class="center">
			<h1></h1>
			<!--<h2>SPORTS CLUB</h2>-->
			
			<div class="buttons">
			 <br>
			<div class="space"></div>
			<!-- <button></button> -->
		</div>
		</div>
<body>
  <div class="banner">
    <h1>Welcome to our Sports Club</h1>
    <p>Play Amazing Sports</p>
	<div class="card">
      <h2>View Tournaments</h2>
      <a href="viewTourR.php" class="btn">View</a>
    </div>
  </div>
</body>
</body>
</html>


<style>
	
	@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding: 0;
	margin: 0;
}
.wrapper{
	background: url(../images/wallpaper4.jpg) no-repeat;
	background-size: cover;
	height: 100vh;
}
.navbar{
	height: 80px;
	width: 100%;
	opacity: 80%;
	top: 0;
	left: 0;
	background: transparent;
}
.navbar .logo{
	width: 140px;
	height: 80px;
	padding: 0px 70px;
}
.navbar ul{
	float: right;
	margin-right: 20vh;
}
.navbar ul li{
	list-style: none;
	margin: 2vh 2vh;
	display: inline-block;
	line-height: 70px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: aqua;
	border-left: 5px solid gold;
    border-right: 5px solid gold;
	border-radius: 20px ;
	box-shadow: 0px 0px 15px;
	padding: 10px 13px;
	text-decoration:none;
  transition: .9s;
}
.navbar ul li a:hover{
  background: aquamarine;
  border-radius: 1px;
  border-color: black;
  color: black;
  transition: .9s;
  cursor: pointer;
  box-shadow: 0 0 2px cyan,
	0 0 2px cyan, 0 0 5px black,
	0 0 15px cyan, 0 0 25px black;
}
.center h2{
	color: aqua;
	font-size: 90px;
	font-weight: bold;
	text-align: right;
	padding: 35vh 60vh;
}
		.card {
			width: 200px;
			border: 1px solid #ccc;
			background-color: rgb(2, 27, 63);			
			text-align: center;
			display: inline-block;
		}
	
  .banner {
  opacity: 80%;
  padding: 70px;
  text-align: center;
  height: 35vh;
  margin-top:10vh;
}

.banner h1 {
  color: cyan;
}

.banner p {
  color:gold;
}
.card {
  border-radius: 15px;
  padding: 20px;
  margin-top: 20px;
  width: 40vh;
  height: 20vh;
}

.card h2 {
  color: cyan;
  font-size: 5vh;
}
.card a {
	color: black;
	padding: 1.5vh;
	background-color: aquamarine;
	margin-top: 2vh;
}

.btn {
  display: inline-block;
  padding: 8px 12px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius:15px;
}
</style>