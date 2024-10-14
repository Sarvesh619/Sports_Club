<?php
session_start();
include 'connection.php';
$uname = $_SESSION['uname'];
$query = "select * from enrollc where user = '$uname'";
$query_run = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
 <title>View Booked Plan Detail</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

     * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
     }

     .card {
         background: url(../images/whitebg.jpg);
         box-shadow: 0 7px 30px rgba(52, 31, 97, 0.1);
         padding: 2rem;
         flex-grow: 1;
         flex-basis: 0;
         max-width: 50%;
         margin: auto;
         padding: 1rem;
         margin-bottom: 1rem;
         border-radius: 40px;
     }

     .title {
         font-size: 20px;
         text-align: center;
         text-shadow: burlywood;
     }

     .des {
         font-size: 20px;
         text-align: center;
         line-height: 50px;
         border: 2px solid black;
         border-radius: 25px;
     }

     /* Added animation classes */
     .fadeIn {
         animation: fadeIn 1s ease;
     }

     .slideUp {
         animation: slideUp 1s ease;
     }

     /* Keyframes for animation */
     @keyframes fadeIn {
         from {
             opacity: 0;
         }

         to {
             opacity: 1;
         }
     }

     @keyframes slideUp {
         from {
             transform: translateY(100px);
             opacity: 0;
         }

         to {
             transform: translateY(0);
             opacity: 1;
         }
     }

     /* Updated body styles */
     body {
         background: url(../images/whiteflow.png);
         width: 100%;
         font-family: 'Roboto', sans-serif;
     }
 </style>
</head>

<body>
 <h1><center>View Booked Course Detail</center></h1>
 <?php 
 while($row = mysqli_fetch_assoc($query_run))
 { $cid=$row['cid'];

    $query1 = "select * from course where cid = $cid ";
    $query_run1 = mysqli_query($connection, $query1);
    while($row1=mysqli_fetch_assoc($query_run1))
    {
 ?>
 <div class="main">
   <!--cards -->
   <div class="card animate__animated animate__fadeIn">
     <div class="des animate__animated animate__slideUp">
       <h1>Course Name: <?php echo $row1['cname']; ?></h1>
     </div>
     <div class="des animate__animated animate__slideUp">
       <p>Description :<?php echo $row1['des']; ?></p>
     </div>
     <div class="des animate__animated animate__slideUp">
       <p>Duration :<?php echo $row1['days']; ?>Days</p>
     </div>
     <div class="des animate__animated animate__slideUp">
       <p>Enroll Date: <?php echo $row['enrolldate']; ?></p>
 </div>
     <div class="des animate__animated animate__slideUp">
     <a href="payment_receipt1.php?fee_payment_id=<?php echo $row['eid']; ?>">View Receipt</a> 
     </div>
   </div> 
 </div>
 <?php }  }?>  
</body>
</html>
