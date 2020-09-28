<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
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
		
		
		<!--<img src="img/.png" style="margin-left:90px;"  width="130px" class="sha"> -->
			


  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search semester"  id="txt" aria-label="Search ">
    <button class="btn btn-outline-success my-2 my-sm-0"  onclick="myFunction()"  type="submit">Search </button>
						<div id="box"></div>

  </form>
</nav>
			
				<?php include"sidebar.php";?><br><br><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					
					<p class="para">
						School Management System is a is a complete school  management software designed to automate a school's diverse operations from classes, exams to school events calendar. 
					</p>
					
					<p class="para">
						This school software has a powerful online community to bring parents, teachers and students on a common interactive platform. It is a paperless office automation solution for today's modern schools. The School Management System provides the facility to carry out all day to day activities of the school.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
		<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search3.php",{s:txt},function(data)
							{

								$("#box").html(data);
							});



						}
						
					});

				});

				function myFunction() {
  window.open("search3.php");
}
			</script>
	</body>
</html>