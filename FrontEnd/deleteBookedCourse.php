<?php
  include('connection.php');
  $query = "delete from enrollc where eid = $_GET[eid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('ENrolled Course Deleted successfully...');
      window.location.href = 'dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'showbookedCourse.php';
    </script>";
  }
?>