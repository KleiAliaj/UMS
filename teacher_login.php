<?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IBU Management System</title>
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>	</head>
	<body class="back">
	
		<?php include"navbar.php";?>
		
		<img src="img/klogo.png" width="100">
		
		<div class="login">
			<h1 class="heading">Teacher's Login</h1>
			<div class="log">
				<?php
					if(isset($_POST["login"]))
					{
						$sql="select * from staff where TNAME='{$_POST["name"]}'and TPASS='{$_POST["pass"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["TID"]=$ro["TID"];
							$_SESSION["TNAME"]=$ro["TNAME"];
							echo "<script>window.open('teacher_home.php','_self');</script>";
						}
						else
						{
							echo "<div class='error'>Invalid Username Or Password</div>";
						}
					}
				
				
				
				?>
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>User Name</label><br>
					<input type="text" name="name" required class="input"><br><br>
					<label>Password </label><br>
					<input type="password" name="pass" required class="input"><br>
					<button type="submit" class="btn" name="login">Login Here</button>
				</form>
			</div>
		</div>
		
		
		
		<div class="footer">
			<footer><p>Copyright &copy; Tutor Joe's </p></footer>
		</div>
		
			<script src="js/jquery.js"></script>
		         <script>
		        $(document).ready(function(){
		        	$(".error").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".error").slideUp(1000);
		        	});
		        	
		        	$(".success").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".success").slideUp(1000);
		        	});
		        });
			</script>
		
	</body>
</html>