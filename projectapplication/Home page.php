<?php session_start(); ?>
<?php require_once('connection.php');?>

<!DOCTYPE html>
<html>
	<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="css/loginpage.css">
	</head>

	<body align="center">
        <div>
<br><br><br><br><br><br><br><br><br>
        <div>
         <button type="button1" onclick="location.href='patientDetails.php'">Patient Details</button>
         <button type="button2"  onclick="location.href='DoctorDetails.php'">Doctor Details</button>
         <button type="button3" onclick="location.href='StaffDetails.php'">Staff Details</button>
        <button type="button4"  onclick="location.href='Appointmentinformation.php'">Appointment Details</button>
         <button type="button5"  onclick="location.href='DeleteDoctor.php'">Delete Doctor</button>

        
        </div>

        </div>
  
        <br><img src="images/logo.jpg" class="logo"><br>
        <div><br>
         <button type="button4"  onclick="location.href='DeleteStaff.php'">Delete Staff </button>
       <button type="button7" onclick="location.href='patient Registraion.php'" >Patient Registration</button>
       <button type="button8" onclick="location.href='doctor Registrartion.php'" >Doctor Registration</button>
       <button type="button9" onclick="location.href='staff registration.php'" >Staff Registration</button>
        <button type="button10" onclick="location.href='loginpage.php'" >logout</button>
       </div> 
     
	
        </body>
</html>
<?php mysqli_close($connection);?>