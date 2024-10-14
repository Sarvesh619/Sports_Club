<?php
session_start();
 include('connection.php');

  $query = "select * from sports where sid = $_GET[sid]";
  $query_run4 = mysqli_query($connection,$query);
  $query1="select * from plan where sid =$_GET[sid]";
  $query_run1 = mysqli_query($connection,$query1);
 
 if(isset($_GET['book'])){
        $sname = $_GET['sname'];
         $cname = $_GET['cname'];
         $uname = $_SESSION['uname'];
         $type=$_GET['type'];
         $sdate=$_GET['sdate'];
         $edate=$_GET['edate'];
         $price=$_GET['price'];
  $query3="select * from book where (sname= '$sname' AND cname='$cname' AND type='$type' AND  price='$price')";
  $query_run3 = mysqli_query($connection,$query3);
  if(mysqli_num_rows($query_run3)>0){
    echo "<script type='text/javascript'>
      alert('You Book Already this Plan..');
      window.location.href = 'viewSport.php';  
    </script>";
  }
  else{
 
  $query2 = "insert into book values(null,'$_SESSION[uname]','$_GET[sname]','$_GET[cname]','$_GET[type]','$_GET[price]','$_GET[sdate]','$_GET[edate]')";
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
  background: skyblue;
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
  box-shadow: 0px 7px 7px black;
  transition: all 0.5s;
  &:hover {
    height: 89vh;
  }
}
.image img{
  width: 40vh;
  height: 25vh;
}
.des{
  text-align:center;
  font-size: 130%
  text-align: center;
}
.des p{
  font-size: 20px;
  color: black;
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
.book{
  background-color: white;
  border: 1px solid black;
  border-radius: 25px;
  padding:18px;
  margin-left: 15vh;

}
.book:hover{
  background-color: black;
  color:white;
}

</style>
<body>
<form action="viewPlan2.php" method="GET">
 <h1><center>Plan Detail</center></h1>
    <?php 
      while($row = mysqli_fetch_assoc($query_run4))
      { 
        $sname=$row['sname'];
        $cname=$row['cname'];
      ?>
      <?php 
      while($row1 = mysqli_fetch_assoc($query_run1))
      { $type=$row1['type'];
        $sdate=$row1['sdate'];
        $edate=$row1['edate'];
        $price=$row1['price'];
      ?>
      <div class="main">

      <!--cards -->

      <div class="card">

      <div class="image">
      <img class="logo" src="../images/<?php echo $row['img']; ?>">
      </div>
      
      
      <input type="hidden" name="uname">
      
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
      <?php 
        $sdate=$row1['sdate'];
        $stdate = date("m-d-Y", strtotime($sdate));?>
      <p>Start Date:<?php echo $stdate ?></p>
      <input type="hidden" name="sdate" value="<?php echo $sdate; ?>">
      </div>
      <br>
      <div class="des">
        <?php 
        $edate=$row1['edate'];
        $eddate = date("m-d-Y", strtotime($edate));?>
      <p>End Date:<?php echo $eddate; ?></p>
      <input type="hidden" name="edate" value="<?php echo $edate; ?>">
      </div>
      <br>
      <div class="des">
      <p>Price:<?php echo $row1['price']; ?></p>
      <input type="hidden" name="price" value="<?php echo $price; ?>">
      </div>
      <br>
      <br>
      <button name="book">Book</button>
      </div> 
    </div>
    <?php } ?>  
    <?php } 
     ?>
  </body>
</html>