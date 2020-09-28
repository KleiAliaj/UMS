<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["TID"]))
	{
		echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM staff WHERE TID={$_SESSION["TID"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
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

		<?php include"navbar.php";?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Semesters</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="table10.php">Semester 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table11.php">Semester 2</a> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table12.php">Semester 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="table13.php">Semester 4</a>

          <li class="nav-item">
        <a class="nav-link" href="table14.php">Semester 5 </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table15.php">Semester  6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="table16.php">Semester 7</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="table17.php">Semester 8 </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="table18.php">Semester 9</a>
      </li>
     
      </li>
    </ul>
  </div>

 
</nav>

				
			<div id="section">

				<?php include"sidebar.php";?><br><br><br>

				
					<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Profile</h3><br>
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							$target="staff/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file))
							{
								$sql="update staff set PNO='{$_POST["pno"]}',MAIL='{$_POST["mail"]}',PADDR='{$_POST["addr"]}',IMG='{$target_file}'where TID={$_SESSION["TID"]}";
								$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}	
						}
					?>

					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr"></textarea><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="img"><br><br>
						<button type="submit" class="btn" name="submit">Add Profile Details</button>
						</form>
					</div>

					<div class="rbox1">
					<h3> Profile</h3><br>
						<table border="1px">
							<tr><td colspan="2"><img src="<?php echo $row["IMG"] ?>" height="100" width="100" alt="upload Pending"></td></tr>
							<tr><th>Name </th> <td><?php echo $row["TNAME"] ?> </td></tr>
							<tr><th>Qualification </th> <td><?php echo $row["QUAL"] ?>  </td></tr>
							<tr><th>Salary </th> <td> <?php echo $row["SAL"] ?>  </td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["PNO"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["MAIL"] ?> </td></tr>
							<tr><th>Address </th> <td> <?php echo $row["PADDR"] ?> </td></tr>
						</table>
					</div>

				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>