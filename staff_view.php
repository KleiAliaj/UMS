<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}
	$sql="SELECT * FROM staff WHERE TID={$_GET["id"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tutor Joe's</title>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > View Staff Details</h3><br>
						<div class="ibox">
							<img src="<?php echo $row["IMG"]; ?>" height="230" width="230">
							
						</div>
						<div class="tsbox">
						<table border="1px">
						
							<tr><th>Name </th> <td> <?php echo $row["TNAME"]; ?></td></tr>
							<tr><th>Qualification </th> <td> <?php echo $row["QUAL"]; ?></td></tr>
							<tr><th>Salary </th> <td> <?php echo $row["SAL"]; ?></td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["PNO"]; ?></td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["MAIL"]; ?></td></tr>
							<tr><th>Address </th> <td> <?php echo $row["PADDR"]; ?></td></tr>
							
						</table>
						</div>
				</div>	
			</div>
			<?php include"footer.php";?>
			
	</body>
</html>