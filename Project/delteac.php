<?php
	session_start();
	include ("db.php");
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Enter The unique Of teacher to Delete</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="#" method="post">
		
			<div class="inner_container">
				<label><b>UNIQUE ID</b></label>
				<input type="text" placeholder="Enter uniue id" name="id" required>
				<button class="login_button" name="delete" type="submit">DELETE</button>
				<a href="admin_homepage.php"><button type="button" class="register_btn">Return to Home</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['delete']))
			{
				@$username=$_POST['id'];
				$query = "delete from teacher where uid='$username' ";
				//echo $query;
				$query_run = mysqli_query($db,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
				   echo '<script type="text/javascript">alert("TEACHER Details Deleted Sucessfully")</script>';
                    header("Location: admhome.php");				   
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>