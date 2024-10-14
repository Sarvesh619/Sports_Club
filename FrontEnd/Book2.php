<?php
session_start();
 include('connection.php');
 $uname = $_SESSION['uname'];
 $query = "select * from book where user = '$uname'";
 $query_run = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>

<style type="text/css">


*{
 margin: 10px;
 padding: 20px;
}
body{
 font-family: arial;
 background: linear-gradient(purple,cyan,aqua);
}
.main{

 margin: 1%;
 padding-left: 180px;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: left;
  padding: 2px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 1px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<body>
<form action="viewPlan.php" method="GET">
 <h1><center>Booked Plan Detail</center></h1>
    <?php 
      while($row = mysqli_fetch_assoc($query_run))
      { 
      ?>
      <div class="main">

      <!--cards -->

      <div class="card">
      <div class="title">
      <h1>Name:<?php echo $row['sname']; ?></h1>
      </div>
      <div class="des">
      <p>Coach Name:<?php echo $row['cname']; ?></p>
      </div>
      
      <div class="des">
      <p>Plan Type:<?php echo $row['type']; ?></p>
      </div>
      <div class="des">
      <p>Days:<?php echo $row['days']; ?></p>
      </div>
      <div class="des">
      <p>Price:<?php echo $row['price']; ?></p>
      </div>
      
      </div> 
    </div>
    <?php } ?>  
  </body>
</html>