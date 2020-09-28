<?php 
    include"database.php";
    
$sql="SELECT * FROM  table10";

  $res=$db->query($sql);
        echo "<table border='1px' class='table'>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Current Realizing (%)</th>
                    <th>Need to Deliver (%)</th>
                    <th>Semester</th>
                </tr>
                ";
    if($res->num_rows>0)

        
    {
        $i=0;
        while($row=$res->fetch_assoc())
        {
            $i++;
            echo '<tr class="t_row">';

        echo '<td>' .$row['COL 1']. '</td>';
        echo '<td>' .$row['COL 2']. '</td>';
        echo '<td>' .$row['COL 3']. '</td>';
        echo '<td>' .$row['COL 4']. '</td>';
        echo '<td>' .$row['COL 5']. '</td>';

             echo "</tr>
            ";
        }
                echo "</table>";
    }
        
    else
    {
        echo "<p>No Record Found</p>";
    }
    
?>
