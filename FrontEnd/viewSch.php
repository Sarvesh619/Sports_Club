<?php
 include('connection.php');
 $query = "select * from sports where sid = $_GET[sid]";
 $query_run = mysqli_query($connection,$query);
 $query1="select * from sch where sid= $_GET[sid]";
 $query_run1 = mysqli_query($connection,$query1);

?>
<!DOCTYPE html>
<html>
<head>
 <title>View sch</title>
</head>

<style type="text/css">
body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.card {
  background-color: #cce5ff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  animation: slide-in 0.5s ease-out;
}

@keyframes slide-in {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.image img {
  display: block;
  margin: 0 auto;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #ffffff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-size: 24px;
  margin-top: 10px;
  color: #003399;
}

.des {
  text-align: center;
  font-size: 18px;
  margin-bottom: 10px;
  color: #005cbf;
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.fade-in {
  animation: fade-in 0.5s ease-out;
}
</style>

<body>
 <h1><center>View Schedule</center></h1>
    <?php 
      while($row = mysqli_fetch_assoc($query_run))
      { 
      ?>
      <?php 
      while($row1 = mysqli_fetch_assoc($query_run1))
      { 
      ?>
      <div class="main">

      <!--cards -->

      <div class="card">

      <div class="image">
      <img class="logo" src="../images/<?php echo $row['img']; ?>">
      </div>
      <div class="title">
      <h1>SPORT : <?php echo $row['sname']; ?></h1>
      </div>
      <div class="des">
      <p>Coach Name:<?php echo $row['cname']; ?></p>
      </div>
      <div class="des">
      <p>Time:<?php echo $row1['time']; ?></p>
      </div>
      <div class="des">
      <p>Week Day:<?php echo $row1['day']; ?></p>
      </div>
      <!--<button onclick="window.location.href='plan.html';">Select</button>-->
      </div> 
    </div>
    <?php } ?>  
    <?php } ?>
  </body>
</html>
<div class="card">
    