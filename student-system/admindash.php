<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../index.php');
				}
				
?>
<html>
<head>
    <title>Dashboard</title>
<link rel="stylesheet" href="css/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
                <!-- <li><a href="index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li> -->
                <a href="logout.php"><button class="logout-btn">LOGOUT</button></a>
                
          </ul>
        </div>
      </nav>
    </header>
      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
        <h3><a href="addmark.php">-> Add Student Data </a></h3>
       <!-- <h3><a href="next_mark_form.php">-> Add Marks of Student </a></h3> -->
       <!-- <h3><a href="updatemark.php">-> Update Student Marks </a></h3>
       <h3><a href="deleteform.php">-> Delete the Marks of Student </a></h3> -->
       <h3><a href="allstudentdata.php">-> Data of all Students </a></h3>
       <!-- <h3><a href="usermassage.php">-> Messages by Student</a></h3> -->
      </div>
    
</body>
</html>