<?php
session_start();
 include('connection.php');
 if(isset($_GET['bookp'])){
        $sname = $_GET['sname'];
         $cname = $_GET['cname'];
         $uname = $_SESSION['uname'];
         $type=$_GET['type'];
         $day=$_GET['day'];
         $price=$_GET['price'];
  $query3="select * from book where (sname= '$sname' AND cname='$cname' AND type='$type' AND  price='$price' AND day='$day')";
  $query_run3 = mysqli_query($connection,$query3);
  if(mysqli_num_rows($query_run3)>0){
    echo "<script type='text/javascript'>
      alert('You Already Booked this Plan..');
      window.location.href = 'viewSport.php';  
    </script>";
  }
  else{
 
  $query2 = "insert into book values(null,'$_SESSION[uname]','$_GET[sname]','$_GET[cname]','$_GET[type]','$_GET[price]','$_GET[day]')";
  $query_run2 = mysqli_query($connection,$query2);
  if($query_run2){
    echo "<script type='text/javascript'>
      alert('Plan booked Successfully');
      window.location.href = 'viewSport.php';  
    </script>";
  }
}
 } 

?>

<!DOCTYPE html>
<html>
<head>
 <title>View Plan</title>
</head>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  background: rgb(41, 11, 77);;
	background-size:cover;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;

}
.main{
  display:inline-flex;
  margin-left: 20px;
}
.card{
  width: 300px;
  height: 80vh;
  border-radius: 10px;
  box-shadow: 0px 1px 10px blueviolet;
  transition: all 0.5s;
  animation: slide-in 0.5s ease-out;
  &:hover {
    height: 85vh;
  }
}

.card p{
  border: 1px solid skyblue;
  width: 80%;
  margin-left: auto;
  margin-right:auto;
  border-radius: 10px;
}

.image img{
  margin-top: 0.3vh;
  margin-left: 0.5vh;
  border-radius: 2vh;
  width: 40vh;
  height: 25vh;
}
.des{
  text-align:center;
  font-size: 130%
  text-align: center;
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
.des p{
  font-size: 20px;
  color: white;
  padding: 2px;
}
.title h1{
  font-size: 30px;
  color: white;
  text-align: center;
}
.title{
  text-align: center;
}

.button{
  background: none;
  width:  100%;
  height: 100%%;
  margin-top: -10vh;
  /* border: solid red; */
}
.button input{
  background-color: cyan;
  height: 5vh;
  width: 35vh;
  border-radius: 5px;
  margin-bottom: 4vh;
  margin-left: 2.5vh;
}
.button input:hover{
  background-color: black;
  color: aqua;
}
</style>
<body>
<form action="PayBookPlan.php" method="GET">
 <h1><center>Plan Detail</center></h1>
    <?php 
      $query = "select * from sports where sid = $_GET[sid]";
      $query_run4 = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run4))
      { 
        $sname=$row['sname'];
        $cname=$row['cname'];
      ?>
      <?php 
      $query1="select * from plan where sid =$_GET[sid]";
      $query_run1 = mysqli_query($connection,$query1);
      while($row1 = mysqli_fetch_assoc($query_run1))
      { $type=$row1['type'];
        $day=$row1['day'];
        $price=$row1['price'];
      ?>
      <div class="main">

      <!--cards -->

      <div class="card">

      <div class="image">
      <img class="logo" src="../images/<?php echo $row['img']; ?>">
      </div>
      
      
      <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']?>">
      
      <div class="title">
      <h1>Name:<?php echo $row['sname']; ?></h1>
      <input type="hidden" name="sname" value="<?php echo $sname; ?>">
      </div>
      <br>
      <div class="des">
      <p>Coach Name:<?php echo $row['cname']; ?></p>
      <input type="hidden" name="cname" value="<?php echo $cname; ?>">
      </div>
      <br>
      <br>
      <div class="des">
      <p>Plan Type:<?php echo $row1['type']; ?></p>
      <input type="hidden" name="type" value="<?php echo $type; ?>">
      </div><br>
      <br>
      <div class="des">
      <p>No Of Days:<?php echo $row1['day']; ?></p>
      <input type="hidden" name="day" value="<?php echo $day; ?>">
      </div>
      <br><br>
      <div class="des">
      <p>Price:<?php echo $row1['price']; ?></p>
      <input type="hidden" name="price" value="<?php echo $price; ?>">
      </div>
      <br>
      <br>
      <div class="button"><br><br>
          <input type="submit"  name="bookp"  value="Book">
        </div>
      </div> 
    </div>
    <?php } ?>  
    <?php } 
     ?>
  </body>
</html>