
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>STUDENT ATTENDANCE</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>NAME</th>
          <th>REGISTRATION NO</th>
          <th>MARKS</th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <form method="POST" action="#">
    <table cellpadding="0" cellspacing="0" border="0" align="left">
      <tbody>
        
          <?php
		  
		  	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'signup');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	session_start();
		  $m=$_SESSION['class'];
		  $z=$_SESSION['subject'];
          echo"$z";	
		  $q="select * FROM student where class='$m'";
         $s=mysqli_query($db,$q);
          $a=1;
        while($row=mysqli_fetch_array($s))
		{
			
			$b=$row['name'];
			$c=$row['adm'];
			
	echo  " <tr><td> $b </td><td> $c </td><td> <input type='text'  name='marks' /> </td></tr> "  ;
		}
?>




        
		
      </tbody>
    </table>
	
  </div>
  <form action="marks.php" method="post">
  <input type="submit" value="submit">
  </form>
</section>
</body>
</html>
<?php
if(isset($_POST["submit"]))
	{
		
		 while($p=mysqli_fetch_array($_POST["marks"]))
		{
		$query = mysqli_query($db,"INSERT INTO  student('marks','subject')VALUES($marks,$z)where adm='$c'");
		if($query)
		{
			echo '<script>alert("student marks inserted!");</script>';
			
					header( "Location: tmarks.php");
		}
	}
	?>
	