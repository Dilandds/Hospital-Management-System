<?php session_start(); ?>
<?php   require_once("connection.php"); ?>

<?php 
$table="";
     if(isset($_POST['submit1'])){
      $Id=$_POST['Id'];

     $query="SELECT Appoinment_Number,App_Date,Patient_Id,Doctor_Id,Staff_Id
             FROM appoinment
             WHERE Patient_Id=$Id OR Doctor_Id=$Id";

     

    $result_set=mysqli_query($connection,$query);
    
    if ($result_set){
      echo mysqli_num_rows($result_set);

     $table ='<table>';
      $table .='<tr>
    <th>Appointment Number</th>
    <th>Date</th>
    <th>Patient Id</th>
     <th>Doctor Id</th>
      <th>Staff Id</th>
     </tr>';
              while($record=mysqli_fetch_assoc($result_set)){
                $table .='<tr>';
                $table .='<td>'.$record['Appoinment_Number'].'</td>'; 
                $table .='<td>'.$record['App_Date'].'</td>'; 
                $table .='<td>'.$record['Patient_Id'].'</td>'; 
                $table .='<td>'.$record['Doctor_Id'].'</td>'; 
                $table .='<td>'.$record['Staff_Id'].'</td>'; 
                 $table .='</tr>';

              }
            $table .='</table>';
    }
  }
    ?>


<!DOCTYPE html>
<html>
	<head>
	<title>Appointment Information</title>
	<link rel="stylesheet" href="css/Details.css">
	</head>
	<body>
        <form action="Appointmentinformation.php" method="post">
<h1>Appointment Details</h1>

<div> 
<label for="Patient Id"><b>Enter ID:</b></label>

<input type="text" placeholder="Enter PatientID/DoctorID" name="Id">
<input type="submit" name="submit1" value="OK">
</div>         
<div> 
        
  
<?php echo $table ; ?>
       
  </div>
 <div>
<button type="button1" name="submit2">Back</button>

<?php 

if (isset($_POST['submit2']) && !isset($_POST['submit1']) ){
if( $_SESSION['val']==1){
 echo  $_SESSION['val'];   
header("Location:DoctorInformation.php"); 
} 
elseif( $_SESSION['val']==2){
 echo  $_SESSION['val'];   
header("Location:patientinformation.php"); 
} 
elseif( $_SESSION['val']==3){
 echo  $_SESSION['val'];   
   header('Location:staffInformation.php');
}elseif( $_SESSION['val']==4){
 echo  $_SESSION['val'];   
   header('Location:Home page.php');
}
}
?>

<button type="button2" onclick="location.href='loginpage.php'">Logout</button>
  </div>
 </form>
</body>
</html>
<?php mysqli_close($connection);?>