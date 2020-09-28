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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php include"navbar.php";?><br>
	
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
					<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Classes</h3><br>
					
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into hclass(TID,CLA,SEC,SUB) values ('{$_SESSION["TID"]}','{$_POST["cla"]}','{$_POST["sec"]}','{$_POST["sub"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
		
						}
					
					
					?>					
						
						
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<label>Class</label><br>
						
						<select name="cla" required class="input3">
							<?php
								$sl="select DISTINCT(CNAME) from class";
								$r=$db->query($sl);
								 if($r->num_rows>0)
								 {
									 echo "<option value=''>Select</option>";
									 while($ro=$r->fetch_assoc())
									 {
										 echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
									 }
								 }
							
							
							?>
					
						</select>
						
					<br><br>
					
					<label>Section</label><br>
					
						<select name="sec" required class="input3">
						<?php
							$sl="select DISTINCT(CSEC) from class";
							$r=$db->query($sl);
								if($r->num_rows>0)
								{
									echo "<option value=''>Select</option>";
									while($ro=$r->fetch_assoc())
									{
										echo "<option value='{$ro["CSEC"]}'>{$ro["CSEC"]}</option>";
									}
								}
						
						
						
						
						?>
						
						
						</select><br></br>
						
						
						
					<label>Subject</label><br>
					
						<select name="sub" required class="input3">
						<?php
							$s="select * from sub";
							$re=$db->query($s);
							if($re->num_rows>0)
							{
								echo "<option value=''>Select</option>";
								while($r=$re->fetch_assoc())
								{
								echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}
						
						
						?>
						</select>
						
					<br><br>
					
					<button type="submit" class="btn" name="submit">Add  Details</button>
					</form>
					
					
					
					</div>
					<div class="rbox1">
					<h3> Details</h3><br>
						<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Class Name</th>
							<th>Section</th>
							<th>Subject</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from hclass";
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
										<td>{$r["CLA"]}</td>
										<td>{$r["SEC"]}</td>
										<td>{$r["SUB"]}</td>
										<td><a href='hclass.php?id={$r["HID"]}' class='btnr'>Delete</a></td>
									</tr>
									
									";
								}
							}
						
						
						
						?>
						
						</table>
					</div>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>