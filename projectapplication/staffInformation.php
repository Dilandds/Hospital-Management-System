<?php session_start(); ?>
<?php   require_once("connection.php"); ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Staff Information</title>
	<link rel="stylesheet" href="css/loginpage.css">
	</head>

	<body align="center">
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <div>
         <button type="button1" onclick="location.href='patientDetails.php'">Patient Details</button>
        
         <button type="button2"  onclick="location.href='DoctorDetails.php'">Doctor Details</button>
         <button type="button3" onclick="location.href='StaffDetails.php'">Staff Details</button>
         <button type="button4" onclick="location.href='DeletePatient.php'" >Delete Patient</button>
        </div>
  
  
        <br><img src="images/staff.jpg" class="logo"><br>
        <div><br>
         <button type="button5" onclick="location.href='patient Registraion.php'" >Patient Registration</button>
         <button type="button6"  onclick="location.href='Appointmentinformation.php'">Appointment Details</button>
         <button type="button7"  onclick="location.href='appoinmentpage.php'">Book Appoinment</button>
          <button type="button9" onclick="location.href='DeleteAppo.php'">Delete Appointment</button><br><br>
    
       </div> 
      <button type="button9" onclick="location.href='loginpage.php'">logout</button>
	
        </body>
</html>
<?php mysqli_close($connection);?>