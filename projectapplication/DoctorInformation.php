<?php session_start(); ?>
<?php   require_once("connection.php"); ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Doctor infromation</title>
	<link rel="stylesheet" href="css/loginpage.css">
	</head>
	<body align="center" class="center">
        
       
       <div>
         <button type="button1" onclick="location.href='patientDetails.php'">Patient Details</button>
        
         <button type="button2"  onclick="location.href='DoctorDetails.php'">Doctor Details</button>
         <button type="button3" onclick="location.href='StaffDetails.php'">Staff Details</button>
        </div>
  
        <br><img src="images/doctor.jpg" class="patientreg"><br><br>
        <div>
        <button type="button4"  onclick="location.href='Appointmentinformation.php'">Appointment Details</button>
        <button type="button5" onclick="location.href='patient Registraion.php'" >Patient Registration</button>
         <button type="button6" onclick="location.href='Updaterecord.php'" >Update patient Record</button><br><br><br><br>

        <button type="button7" onclick="location.href='loginpage.php'">logout</button>
       </div>       
 
</body>
</html>
<?php mysqli_close($connection);?>