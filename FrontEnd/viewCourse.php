<?php 
session_start();
  include('connection.php');
  $query = "select * from course";
  $query_run = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Course</title>
</head>

<style type="text/css">


*{
  background: midnightblue;
  background-size:auto;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.main {
  display: inline-flex;
  margin-left: 20px;
}

.card {
  width: 280px;
  height: 340px;
  margin-top: 5vh;
  margin-left: .5vh;
  border-radius: 10px;
  box-shadow: 3px 4px black;
  background: cornflowerblue;
  animation: slide-in 0.6s ease-out;
  transition: all 0.6s;
}

.card:hover {
  transform: scale(1.1);
  box-shadow: 5px 6px black;
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
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  width: 100%;
  height: 25vh;
}

.title {
  text-align: center;
  padding: 10px;
  background: cornflowerblue;
}

h1 {
  font-size: 20px;
  background: skyblue;
}

.des {
  padding: 3px;
  text-align: center;
  padding-top: 10px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background: cornflowerblue;
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

.des p {
  background: skyblue;
}

button:hover {
  background-color: white;
  color: white;
  transition: 0.5s;
  cursor: pointer;
}

.des a {
  background: midnightblue;
  color: aliceblue;
  margin-top: 40px;
  text-decoration: none;
  margin-bottom: 10px;
  border: 1px solid black;
  border-radius: 25px;
  padding: 10px;
}

.des a:hover {
  background: black;
  border-radius: 2px;
  color: mediumturquoise;
  transition: 0.7s;
  cursor: pointer;
  box-shadow: 0 0 2px cyan, 0 0 2px cyan, 0 0 5px black, 0 0 15px cyan, 0 0 25px black;
}

.btn {
  background: white;
  color: cornflowerblue;
  text-decoration: none;
  border: 2px solid cornflowerblue;
  border-radius: 25px;
  margin-left: 3vh;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 2px;
  padding-bottom: 0px;
  font-size: 25px;
}

.btn:hover {
  background: red;
  color: black;
}



</style>
<body>
  <form action="Enroll.php" method="GET">
 <h1><center>Course Details</center></h1>
 <a class="btn" href="home.php">Back</a> <br>
    <?php 
      while($row = mysqli_fetch_assoc($query_run))
      {     $fee=$row['fee'];
            $cname=$row['cname'];
            $cid=$row['cid'];
    $query1="select ename from emp where eid=$row[eid]";
    $query1_run=mysqli_query($connection,$query1);
    while($row2 = mysqli_fetch_assoc($query1_run)){ ?>
      <div class="main">
      <input type="hidden" name="cid" value="<?php echo $_row['cid'];?>" >
      <input type="hidden" name="uname" value="<?php echo $_SESSION['uname'];?>" >
      <!--cards -->
      
      <div class="card">
      <div class="title">
      <h1>Course Name :<?php echo $row['cname']; ?></h1>
      <input type="hidden" name="cname" value="<?php echo $_row['cname'];?>" >
      </div>
      <div class="des">
      <p>Description :<?php echo $row['des']; ?></p>
      <div class="des">
      <p>Coach Name :<?php echo $row2['ename']; ?></p></div>
      <div class="des">
      <h1>Fee :<?php echo $row['fee']; ?></h1>
      <input type="hidden" name="fee" value="<?php echo $_row['fee'];?>" >
      </div>
      <div class="des">
      <h1>Days :<?php echo $row['days']; ?></h1>
      </div>
      <br>
      <a href="Enroll.php?cid=<?php echo $row['cid']; ?>">Enroll</a>
      
      </div>
      </div>
    <?php }  }?>
    </div>
      </form>
  </body>
</html>


