<?php session_start(); ?>
<?php   require_once("connection.php"); ?>

<!DOCTYPE html>
<html>
	<head>
	<title>Patient Information</title>
	<link rel="stylesheet" href="css/loginpage.css">
	</head>
	<body align="center" class="center">
        
       
        <div>
         <button type="button1" onclick="location.href='patientDetails.php'">Patient Details</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <button type="button2"  onclick="location.href='DoctorDetails.php'">Doctor Details</button>
        </div>
  
        <br><img src="images/patientreg.png" class="patientreg"><br>
        <div>
        <button type="button3"  onclick="location.href='Appointmentinformation.php'">Appointment Details</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="button4" onclick="location.href='loginpage.php'">logout</button>
       </div>      
 
</body>
</html>
<?php mysqli_close($connection);?>