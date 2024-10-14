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


*{
  background:rgb(41, 11, 77);
  background-size:100%;
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
  background: rgb(65, 169, 224);
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
  background: rgb(65, 169, 224);;
}

h1 {
  font-size: 20px;
  color: white;
  border-radius: 20px;
  height: 25px;
}

.des {
  padding: 3px;
  text-align: center;
  padding-top: 10px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background: rgb(65, 169, 224);;
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
  background: rgb(65, 169, 224);;
}

button:hover {
  background-color: black;
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
  background: black;
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
  <form action="viewPlan.php" method="GET">
 <h1><center>Sport Details</center></h1>
 <a class="btn" href="home.php">Back</a> <br>
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
      <a href="viewplan1.php?sid=<?php echo $row['sid']; ?>">View Plans</a>
      <a href="viewSch.php?sid=<?php echo $row['sid']; ?>">View Schedule</a> 
      </div>
      </div>
    <?php } ?>
    </div>
      </form>
  </body>
</html>


