<?php
  include('connection.php');
  $query = "delete from sports where sid = $_GET[sid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Sport Deleted successfully...');
      window.location.href = 'showSport.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'showSport.php';
    </script>";
  }
?>