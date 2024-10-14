<?php
  include('connection.php');
  $query = "delete from plan where pid = $_GET[pid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Plan Deleted successfully...');
      window.location.href = 'showplan.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'showplan.php';
    </script>";
  }
?>