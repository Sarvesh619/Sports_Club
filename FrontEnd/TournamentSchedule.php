<!DOCTYPE html>
<html>
<head>
    <title>Tournament Schedule</title>
    <style>
        /* CSS styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        table, th, td {
            border: 1px solid #ccc;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tournament Schedule</h1>
        
        <table>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Match</th>
                <th>Location</th>
            </tr>
            <?php
            // PHP code to fetch schedule from a database or any other source
            // Replace this with your own logic to fetch the schedule
            
            $schedule = array(
                array('2023-06-15', '10:00 AM', 'Team A vs Team B', 'Stadium 1'),
                array('2023-06-16', '11:30 AM', 'Team C vs Team D', 'Stadium 2'),
                array('2023-06-17', '3:00 PM', 'Team E vs Team F', 'Stadium 3'),
                array('2023-06-18', '2:30 PM', 'Team G vs Team H', 'Stadium 1')
            );
            
            foreach ($schedule as $match) {
                echo '<tr>';
                echo '<td>' . $match[0] . '</td>';
                echo '<td>' . $match[1] . '</td>';
                echo '<td>' . $match[2] . '</td>';
                echo '<td>' . $match[3] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>
