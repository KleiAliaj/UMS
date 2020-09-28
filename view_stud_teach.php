<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["TID"]))
	{
		echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IBU</title>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
			
				<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >View Student Details</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Roll No</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>Mail</th>
							<th>Address</th>
							<th>Class</th>
							<th>Sec</th>
							<th>Image</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from student where TID={$_SESSION["TID"]}";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
										<tr>
											<td>{$i}</td>
											<td>{$r["RNO"]}</td>
											<td>{$r["NAME"]}</td>
											<td>{$r["FNAME"]}</td>
											<td>{$r["DOB"]}</td>
											<td>{$r["GEN"]}</td>
											<td>{$r["PHO"]}</td>
											<td>{$r["MAIL"]}</td>
											<td>{$r["ADDR"]}</td>
											<td>{$r["SCLASS"]}</td>
											<td>{$r["SSEC"]}</td>
											<td><img src='{$r["SIMG"]}' height='70' width='70'></td>
											<td><a href='stud_delete.php?id={$r["ID"]}' class='btnr'>Delete</a><td>
										</tr>
									
									
									
									";
								}
							}
							else
							{
								echo "No Record Found";
							}
						
						?>
						
					</table>
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>