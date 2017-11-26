<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		
	 $name = $_POST['name'];
	 $username = $_POST["username"];
	 $password =$_POST["password"];
	 $department = $_POST["department"];
	 $age =$_POST["age"];
	 $contact =$_POST["contact"];
	 $adm = $_POST["adm"];
	 

		$name = mysqli_real_escape_string($db, $name);
		$username = mysqli_real_escape_string($db, $username);
		
		$department = mysqli_real_escape_string($db, $department);
		$age = mysqli_real_escape_string($db, $age);
		$contact = mysqli_real_escape_string($db, $contact);
		$adm = mysqli_real_escape_string($db, $adm);
		$password = mysqli_real_escape_string($db, $password);
		//$password = md5($password);
		
		
		
		
		
		
	 
	 
	 
			
			$query = "INSERT INTO  student(name, username, department, age, contact,adm, password) VALUES ('$name','$username','$department','$age','$contact','$adm','$password');INSERT INTO  attendance(name,adm) VALUES ('$name','$adm') ";
             mysqli_multi_query($db, $query);
			if($query)
			{
				$msg = "Thank You! you are now registered.";
			}

		}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form by Eggs Lab</title>
<style>
label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
fieldset
{
	width: 500px;
}
fieldset legend
{
	padding:2px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:14px;
	font-weight:bold;
	background:#999;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>

<form method="post" action="">
<fieldset>
<legend>Registration Form</legend>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">Name</label></div></td>
<td><input name="name" type="text" class="input" size="25" required /></td>
</tr>

<tr>
<td style="font-weight: bold"><div align="right"><label for="email">username</label></div></td>
<td><input name="username" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">department</label></div></td>
<td><input name="department" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">age</label></div></td>
<td><input name="age" type="number" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">contact</label></div></td>
<td><input name="contact" type="number" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="name">admission no</label></div></td>
<td><input name="adm" type="number" class="input" size="25" required /></td>
</tr>

<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>  
</body>
</html>