<html>
<head>
	<title>student Registration Page</title>
</head>
<body>
	<h2>Registration Page</h2></br></br>
	<a href="index.php">Return to Home Page</a></br></br>
	<form action="register.php" method="POST">
		Enter Name : <input type="text" name="name" required="required"></br>
		Enter Username (Email id) : <input type="email" name="username" required="required"/></br></br>
		Enter Department : <input type="text" name="department" required="required"></br>
		Enter Age : <input type="text" name="age"></br>
        Enter Contact : <input type="text" name="contact" required="required"></br>
		Enter admission no: <input type="text" name="adm" required="required"></br>
		Enter password : <input type="password" name="password" required="required"/></br></br>
		<input type="submit" value="register">
	</form>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	 $name = $_POST['name'];
	 $username = $_POST['username'];
	 $department = $_POST['department'];
	 $age =$_POST['age'];
	 $contact =$_POST['contact'];
	 $adm = $_POST['adm'];
	 $password =$_POST['password'];
	 $bool = true;
define('DB_HOST', 'localhost');
define('DB_NAME', 'signup');
define('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	 while($row = mysqli_fetch_array($query))
	 {
	 	$table_users = $row['username'];
	 	if($username == $table_users)
	 	{
	 		$bool = false;
	 		print '<script>alert("Username has been taken!");</script>';
	 		print '<script>window.location.assign("register.php");</script>';
	 	}
	 }

	 if($bool)
	 {
	 	mysqli_query("INSERT INTO  student(name, username, department, age, contact,adm, password) VALUES ('$name','$username','$department','$age','$contact','$adm','$password')");
	 }
}
?>