<?php
  include('connection.php');
  $query = "delete from tourres where toid = $_GET[toid]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Tournament Result Deleted successfully...');
      window.location.href = 'showTournamentR.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'showTournamentR.php';
    </script>";
  }
?>