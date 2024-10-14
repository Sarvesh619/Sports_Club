<?php
  include('connection.php');
  $query = "delete from book where bid = $_GET[bid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Sport Deleted successfully...');
      window.location.href = 'showcourse.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'showcourse.php';
    </script>";
  }
?>