<?php
  include('connection.php');
  $query = "delete from tour where tid = $_GET[tid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Tournament Deleted successfully...');
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