<?php
  include('connection.php');
  $query = "delete from emp where eid = $_GET[eid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Employee Deleted successfully...');
      window.location.href = 'viewemp.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'viewemp.php';
    </script>";
  }
?>