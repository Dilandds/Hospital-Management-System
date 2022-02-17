<?php session_start(); ?>
<?php require_once('connection.php');?>

<?php
if(isset($_POST['submit1'])){
    $Number=$_POST['AppoinmentNumber'];
    $Date=$_POST['date'];
    $ParientID=$_POST['patientID'];
    $DoctorID=$_POST['DoctorID'];
    $StaffID=$_POST['StaffID'];
   
    


    $query= " INSERT INTO appoinment(Appoinment_Number,App_Date,Patient_Id,Doctor_Id,Staff_Id)
            VALUES ('{$Number}','{$Date}','{$ParientID}','{$DoctorID}','{$StaffID}')";

        $result=mysqli_query($connection,$query);
echo $result;

        if($result){
            echo "appointment successful";
            }else{
            echo "appointment not successful";
            }
        
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Appointment page</title>
	<link rel="stylesheet" href="css/Registration.css">
	</head>
	<body align="left">
         <form action="appoinmentpage.php" method="post">
        <div> 
        
<h2>Appointment</h2>

		<label for=" AppoinmentNumber"><b> Number:</b></label>
        <input type="text"  name=" AppoinmentNumber" required><br>
        
        <label for="date"><b>Date:</b></label>
        <input type="text"  name="date" required><br>


       <label for="PatientID"><b>Parient ID:</b></label>
        <input type="text"  name="patientID" required><br>

       <label for="DoctorID"><b>Doctor ID:</b></label>
        <input type="text"  name="DoctorID" required><br>

        <label for="StaffID"><b>Staff ID:</b></label>
        <input type="text"  name="StaffID" required><br>
	
       
<br><br><br><br> 

       
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit1" value="Book">
        
       </div>
<div>
<button type="button1" onclick="history.go(-1)">Back</button>
<button type="button2" onclick="location.href='loginpage.php'">Logout</button>
  </div>
 </form>
</body>
</html










<?php mysqli_close($connection);?>