<?php
//Connection for database
include 'db.php';
//Select Database
session_start();
	$subject=$_SESSION['subject'];
	
if(isset($_GET['aadm']))
{
	
	$aadm=$_GET['aadm'];
	$sid=$_GET['sid'];
	
	
	
	$insert="insert into attendance(subject,sid,adm) values('$subject','$sid','$aadm')";
	$run_insert=mysqli_query($db,$insert);
	if($run_insert)
	{
		echo '<script>alert("student marked absent!");</script>';
	}
	
}
?>

<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>STUDENT ATTENDANCE</h1>
  <div class="a"><?php echo "Today is " . date("d/m/Y") . "<br>"?></div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>NAME</th>
          <th>REGISTRATION NO</th>
          <th>ATTENDANCE STATUS</th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <form>
    
    <table cellpadding="0" cellspacing="0" border="0" align="centre">
      <tbody>
	<?php
	
	$sessionname=$_SESSION['name'];
	$c=$_SESSION['class'];

	//echo $sessionname.$c;
	$a="select * FROM subject where name='$sessionname' and class='$c'";
	
	$run_a=mysqli_query($db,$a);
	$row_a=mysqli_fetch_array($run_a);
	$sid=$row_a['id'];
	
	$fetch="select * from student where class='$c'";
	$run_fetch=mysqli_query($db,$fetch);
	while($row_fetch=mysqli_fetch_array($run_fetch))
	{
		$s_name=$row_fetch['name'];
		$s_adm=$row_fetch['adm'];
		echo "
		<tr>
		<td>$s_name</td>
		<td>$s_adm</td>
	
		<td><a href='table.php?aadm=$s_adm&sid=$sid'>absent</a></td>
		</tr>
		
		";
	
	}
	
	?>



        
       
      </tbody>
    </table>
  </div>
  <a href="logout1.php">LOGOUT</a>
</section>

</body>
</html>

