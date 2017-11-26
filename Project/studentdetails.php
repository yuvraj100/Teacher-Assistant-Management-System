<?php
	
	include ("db.php");
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Details page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Enter The Admission Number Of Student to See Details</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="#" method="post">
		
			<div class="inner_container">
				<label><b>Admission Number</b></label>
				<input type="numeric" placeholder="Enter Adimssion Number" name="adm" required>
				<button class="login_button" name="detail" type="submit">SEE DETAILS</button>
				<a href="admin_homepage.php"><button type="button" class="register_btn">Return to Home</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['detail']))
			{ 
		         session_start();
			$_SESSION['adm']=$_POST['adm'];
			header( "Location: studentdetails2.php");
			}
				
			
			
		?>
		
	</div>
</body>
</html>