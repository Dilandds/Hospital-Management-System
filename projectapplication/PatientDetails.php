<?php session_start(); ?>
<?php   require_once("connection.php"); ?>
<?php 
      $table1=$table2="";
     if(isset($_POST['submit1'])){
      $PatientId=$_POST['PatientId'];

     $query1="SELECT First_Name,Last_Name,Age,Mobile_No,Gender,Address,Patient_Id
             FROM patient
             WHERE Patient_Id=$PatientId";

     $query2="SELECT Record_Number,Disease,Medicines,Patient_Id,specialNote
             FROM medicalrecord
             WHERE Patient_Id=$PatientId";

    $result_set1=mysqli_query($connection,$query1);
    $result_set2=mysqli_query($connection,$query2);
    if ($result_set1){
      

     $table1 ='<table>';
      $table1 .='<tr><th>Firstname</th><th>Lastname</th><th>Age</th><th>Tel Number</th><th>Gender</th><th>Address</th><th>Patient ID</th></tr>';
              while($record1=mysqli_fetch_assoc($result_set1)){
                $table1 .='<tr>';
                $table1 .='<td>'.$record1['First_Name'].'</td>'; 
                $table1 .='<td>'.$record1['Last_Name'].'</td>'; 
                $table1 .='<td>'.$record1['Age'].'</td>'; 
                $table1 .='<td>'.$record1['Mobile_No'].'</td>'; 
                $table1 .='<td>'.$record1['Gender'].'</td>'; 
               $table1 .='<td>'.$record1['Address'].'</td>'; 
                $table1 .='<td>'.$record1['Patient_Id'].'</td>'; 
                 $table1 .='</tr>';

              }
            $table1 .='</table>';
    }
    if ($result_set2) {

     $table2 ='<table>' ;
      $table2 .=' <tr><th>Patient ID</th><th>Record_Num</th><th>Disease</th><th>Medicines</th><th>specialNote</th></tr>';
       while($record2=mysqli_fetch_assoc($result_set2)){
                $table2 .='<tr>';
                $table2 .='<td>'.$record2['Patient_Id'].'</td>';
                $table2 .='<td>'.$record2['Record_Number'].'</td>'; 
                $table2 .='<td>'.$record2['Disease'].'</td>'; 
                $table2 .='<td>'.$record2['Medicines'].'</td>'; 
                $table2 .='<td>'.$record2['specialNote'].'</td>'; 
               
               
                 $table2 .='</tr>';

              }
            $table2 .='</table>';
    }
  }
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="css/Details.css">
	</head>
	<body>
 
        <form action="PatientDetails.php" method="post">
<h1>Patient Details</h1>  
<div> 
<label for="PatientId"><b>Patient ID:</b></label>

<input type="text" placeholder="Enter PatientID" name="PatientId" > 
<input type="submit" name="submit1" value="OK">

</div>      
<div> 
 <b>General details</b><br>       
<?php echo $table1;?>

  </div>

<div > 
  <b>Medical Record Details<b/><br>
 
<?php echo $table2;?>

       
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