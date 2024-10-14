<!DOCTYPE html>
<html>
  <div class="main">
    <?php
      //session_start();
      include('connection.php');
      $query = "select * from tour";
      $query_run = mysqli_query($connection,$query);
      $sn = 0;
      echo "<center><h4><u>List Of Tournament</u></h4></center><br>";
      echo "<center><table class='table' border=1 width=1000>
        <tr>
          <th width=100>S.No</th>
          <th width=100>Tournament Name</th>
          <th width=100>Sport name</th>
          <th width=100>Start Date</th>
          <th width=100>End Date</th>
          <th width=100>Action</th>
        </tr>";
      while($row = mysqli_fetch_assoc($query_run)){
        $query1="select sname from sports where sid=$row[sid]";
        $query1_run=mysqli_query($connection,$query1);
        while($row2 = mysqli_fetch_assoc($query1_run)){
        $sn = $sn + 1;
        $id = $row['tid'];
        echo "
          <tr width=100>
            <td>$sn</td>
            <td>$row[tname]</td>
            <td>$row2[sname]</td>
            <td>$row[sdate]</td>
            <td>$row[edate]</td>
    
            <td><a class='button' href='viewTourmatch.php?tid=$id'>view</a></td>
          </tr>
        ";
      }
    }
      echo "</table></center>";
    
    
    ?>
     </div>
    </body>
    </html>


    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(../images/black.jpg);
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