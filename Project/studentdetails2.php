<?php
		include ("db.php");
		
	        	
			 session_start();
	
		$adm=$_SESSION['adm'];
		
           $fetch="select * from student where adm='$adm'";
		   
	     $run_fetch=mysqli_query($db,$fetch);
 while($row=mysqli_fetch_array($run_fetch))
		  {
			   $name=$row['name'];
			  $sub1=$row['sub1'];
			  $sub2=$row['sub2'];
			  $sub3=$row['sub3'];
			  $sub4=$row['sub4'];
			  $sub5=$row['sub5'];
			  $sub6=$row['sub6'];
		  }	
		  $t1="select total from subject where subject='$sub1'";
		  $run=mysqli_query($db,$t1);
		  		    $s1 = mysqli_fetch_array($run);
		  
		  $t2="select total from subject where subject='$sub2'";
		  $run=mysqli_query($db,$t2);
		  		    $s2 = mysqli_fetch_array($run);
		  $t3="select total from subject where subject='$sub3'";
		  $run=mysqli_query($db,$t3);
		    $s3 = mysqli_fetch_array($run);
		  $t4="select total from subject where subject='$sub4'";
		  $run=mysqli_query($db,$t4);
		  		    $s4 = mysqli_fetch_array($run);
		  $t5="select total from subject where subject='$sub5'";
		  $run=mysqli_query($db,$t5);
		  		    $s5 = mysqli_fetch_array($run);
		  $t6="select total from subject where subject='$sub6'";
		  $run=mysqli_query($db,$t6);
		  		    $s6= mysqli_fetch_array($run);
		  
		  
?>		  
<html>
<head>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1><?php echo "hello <br>". $name;?></h1>
  <div class="a">ATTENDANCE STATUS</div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>NAME</th>
          <th>REGISTRATION NO</th>
		  <?php
		  echo"
          <th>$sub1</th>
		  <th>$sub2</th>
		  <th>$sub3</th>
		  <th>$sub4</th>
		  <th>$sub5</th>
		  <th>$sub6</th>
		  ";
		  ?>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <form>
    <table cellpadding="0" cellspacing="0" border="0" align="centre">
      <tbody>
	
	
	    
	     
		  
           <?php
           $query1=("select count(*) from attendance  where adm='$adm' and subject='$sub1'");
		    $run= mysqli_query($db,$query1);
		    $count1 = mysqli_fetch_array($run);
		  
		    $query2="select count(*) from attendance  where adm='$adm' and subject='$sub2'";
		   $run= mysqli_query($db,$query2);
		    $count2 = mysqli_fetch_array($run);

		   
		   
		   
		    $query3="select count(*) from attendance  where adm='$adm' and subject='$sub3'";
		    $run= mysqli_query($db,$query3);
		    $count3 = mysqli_fetch_array($run);
		    $query4="select count(*) from attendance  where adm='$adm' and subject='$sub4'";
		    $run= mysqli_query($db,$query4);
		    $count4 = mysqli_fetch_array($run);
		    $query5="select count(*) from attendance  where adm='$adm' and subject='$sub5'";
		    $run= mysqli_query($db,$query5);
		    $count5 = mysqli_fetch_array($run);
		    $query6="select count(*) from attendance  where adm='$adm' and subject='$sub6'";
		    $run= mysqli_query($db,$query6);
		    $count6 = mysqli_fetch_array($run);
	        if($s1==null)
			{$d1 = 0;}
	        else {$d1=($s1[0]-$count1[0])*100/$s1[0];}
			if($s2==null)
			{$d2=0;}
	        else {$d2=($s2[0]-$count2[0])*100/$s2[0];}
			if($s3==null)
			{$d3=0;}
		  else  
		  {
			  $d3=($s3[0]-$count3[0])*100/$s3[0];
		  }
		    if($s4==null)
			{
				$d4=0;
			}
			else
			{
			$d4=($s4[0]-$count4[0])*100/$s4[0];
			}
		if($s5==null)
		{
			$d5=0;
		}	
			else
			{
			$d5=($s5[0]-$count5[0])*100/$s5[0];
			}
		   if($s6==null)
		   {
				$d6=0;
		   }
			else
			{
			
		    $d6=($s6[0]-$count6[0])*100/$s6[0];
			}
		echo "
		<tr>
		<td>$name</td>
		<td>$adm</td>
		<td>$d1</td>
		<td>$d2</td>
		<td>$d3</td>
		<td>$d4</td>
		<td>$d5</td>
		<td>$d6</td>
		

		</tr>
		";

	
	?>



        
       
      </tbody>
    </table>
  </div>
  <a href="admhome.php">LOGOUT</a>
  
  
</section>

</body>
</html>

