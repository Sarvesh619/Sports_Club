<?php
  include('connection.php');
  $query = "delete from sch where scid = $_GET[scid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Schedule Deleted successfully...');
      window.location.href = 'delschedule.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'deletesch.php';
    </script>";
  }
?>
