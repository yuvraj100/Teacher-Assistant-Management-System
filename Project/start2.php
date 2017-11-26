<?php


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'signup');
	mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TEACHERS ASSISTANT</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page2">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="studentlogin.php" class="m1">STUDENT LOGIN</a></li>
          <li class="current"><a href="loginteacher.php" class="m2">TEACHER LOGIN</a></li>
          <li><a href="registration.php" class="m3">STUDENT SIGN UP</a></li>
          <li><a href="teacher.php" class="m4">TEACHER SIGN UP</a></li>
            <li><a href="adm.php" class="m5">ADMINISTRATOR LOGIN</a></li>
        </ul>
      </nav>
    
    </div>
  </header>
  <div class="container">
    <aside>
      <h3>info</h3>
      <ul class="categories">
        <li><span><a href="http://cusat.ac.in/">CUSAT NEWS</a></span></li>
        <li><span><a href="http://results.cusat.ac.in/">CUSAT RESULTS</a></span></li>
        
        
        <li><span><a href="#">ADMINISTRATORS</a></span></li>
      
        <li class="last"><span><a href="http://www.cusat.ac.in/academic_calendar.php"> ACADEMIC CALENDER</a></span></li>
      </ul>
     
     
      
    </aside>
    <section id="content">
      <div id="banner">
        <h2>TEACHERS ASSITANT <span>ONLINE ATTENDANCE <span>FAST AND ACCURATE</span></span></h2>
      </div>
      <div class="inside">
       
        <h2>About <span>Website</span></h2>
        <div class="img-box"><img src="images1/2page-img4.jpg"><span class="txt1">TEACHERS ASSITANT</span> student attendance management system deals with the maintenance of the student’s attendance details.It is generates the attendance of the student on basis of  presence in class. It is maintained on the daily basis of their attendance. the staffs will be provided with the separate username &amp; password to make the student’s status.The staffs handling the particular subjects responsible to make the attendance for all students. Only if the student present on that particular period, the attendance will be calculated. The students attendance reports based on weekly and consolidate will be generated </div>
       </div>
    </section>
  </div>
</div>


<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
