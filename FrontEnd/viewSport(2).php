<?php 
  include('connection.php');
  $query = "select * from sports";
  $query_run = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
 <title>sports</title>
</head>

<style type="text/css">


@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  background: url(../images/whiteflow.png) no-repeat;
	background-size:cover;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;

}
.main{
  height: 100vh;
  display:inline-flex;
}
.card{
  width: 300px;
  height: 350px;
  border-radius: 10px;
  box-shadow: 0px 5px 4px black;
}
.image img{
  width: 40vh;
  height: 25vh;
}
.des{
  text-align:center;
  font-size: 130%
}
.title{
  text-align: center;
}
.btn{
  border: 20px;
  font-size: 30px;
  text-decoration: none;
  background-color: brown;
  color:white;
  background-size:15px;
}
.btn:hover{
  background-color: black;
  color:white;
}
.des a{
  font-size: 15px;
	font-family: 'Roboto', sans-serif;
	color: black;
	border: 3px solid black;
	border-radius: 15px ;
	box-shadow: 0px 2px 0px;
	padding: 6px 10px;
}
.des a:hover{
  color:white;
  font-style: none;
  background: black;
}



</style>
<body>
  <form action="" method="GET">
 <h1><center>Sport Details</center></h1>
 <a class="btn" href="logout.php">Logout</a> <br>
    <?php 
      while($row = mysqli_fetch_assoc($query_run))
      {       ?>
      <div class="main">

      <!--cards -->

      <div class="card">

      <div class="image">
      <img class="logo" src="../images/<?php echo $row['img']; ?>">
      </div>
      <div class="title">
      <h1>NAME: <?php echo $row['sname']; ?></h1>
      </div>
      <div class="des">
      <p>Coach Name:<?php echo $row['cname']; ?></p>
      <br>
      <a href="viewPlan2.php?sid=<?php echo $row['sid']; ?>">View Plans</a>
      <a href="viewSch.php?sid=<?php echo $row['sid']; ?>">View Schedule</a> 
      </div>
      </div>
    <?php } ?>
    </div>
      </form>
  </body>
</html>