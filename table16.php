<?php include"navbar.php";?><br>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		
<table class="thistable" width="600" border="2" cellpadding="5" cellspacing="5">';

<tr class="t_row">
        <th scope="col">Task</th>
        <th scope="col">Description</th>
        <th scope="col">Current Realizing (%)</th>
        <th scope="col"> Need to Deliver (%)</th>
        <th scope="col">Semester</th>
       
    </tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FROM  `table 16` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table class="thistable" width="600" border="2" cellpadding="5" cellspacing="5">';

    // fetch the data into an array and loop through each row

    while($row = $result->fetch_assoc()) {


        echo '<tr class="t_row">';

	    echo '<td>' .$row['COL 1']. '</td>';
        echo '<td>' .$row['COL 2']. '</td>';
        echo '<td>' .$row['COL 3']. '</td>';
        echo '<td>' .$row['COL 4']. '</td>';
        echo '<td>' .$row['COL 5']. '</td>';

             echo "</tr>";
    }		echo "</table>";
    echo "<tr>";

} else {
    echo "0 results";
}
$conn->close();
?>

		<div class="footer">


