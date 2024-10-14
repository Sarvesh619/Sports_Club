<!DOCTYPE html>
<html>
<head>
    <title>Tournament Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(../images/black.jpg);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: url(../images/neon.jpg);
            border-radius: 5px;
            

        }

        h1 {
            text-align: center;
            color: violet;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-color: violet;
            border-bottom-right-radius: 2vh;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom-right-radius: 2vh;

        }

        th {
            background-color: #333;
            color: #fff;
            border-bottom-right-radius: 2vh;

        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        tr:nth-child(odd) {
            background-color: gray; 
        }


        tr:hover {
            background-color: violet;
            
        }

        .center h4,u{
            color: violet;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tournament Schedule</h1>
        
        <table>
            <?php
  //session_start();
  include('connection.php');
  $query = "select * from tourres where tid= $_GET[tid]";
  $query_run = mysqli_query($connection,$query);
  $sn = 0;
  echo "<center><h4><u>List Of Tournament Result</u></h4></center><br>";
  echo "<center><table class='table' border=1 width=1000>
    <tr>
      <th width=100>S.No</th>
      <th width=100>Tournament Name</th>
      <th width=100>Match No</th>
      <th width=100>Match</th>
      <th width=100>Result</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $query1="select tname from tour where tid=$row[tid]";
    $query1_run=mysqli_query($connection,$query1);
    while($row2 = mysqli_fetch_assoc($query1_run)){
    $sn = $sn + 1;
    $id = $row['toid'];
    echo "
      <tr width=100>
        <td>$sn</td>
        <td>$row2[tname]</td>
        <td>$row[matchno]</td>
        <td>$row[matchdes]</td>
        <td>$row[Result]</td>
      </tr>
    ";
  }
}
  echo "</table></center>";


?>
        </table>
    </div>
</body>
</html>
