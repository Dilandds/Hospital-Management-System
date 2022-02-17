<?php session_start(); ?>
<?php   require_once("connection.php"); ?>
<?php 
 $table="";
     if(isset($_POST['submit1']) && !empty($_POST['DoctorId'] )){
      $DoctorId=$_POST['DoctorId'];

     $query="SELECT First_Name,Last_Name,Age,Mobile_No,Gender,Address,Specialization,Doctor_Id
             FROM doctor
             WHERE Doctor_Id=$DoctorId";

     

    $result_set=mysqli_query($connection,$query);
    
    if ($result_set){
      
     $table ='<table>';
      $table .='<tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Tel Number</th>
     <th>Gender</th>
      <th>Address</th>
      <th>Specilaization</th> 
      <th>Doctor ID</th>
      
  </tr>';
              while($record=mysqli_fetch_assoc($result_set)){
                $table .='<tr>';
                $table .='<td>'.$record['First_Name'].'</td>'; 
                $table .='<td>'.$record['Last_Name'].'</td>'; 
                $table .='<td>'.$record['Age'].'</td>'; 
                $table .='<td>'.$record['Mobile_No'].'</td>'; 
                $table .='<td>'.$record['Gender'].'</td>'; 
               $table .='<td>'.$record['Address'].'</td>'; 
               $table .='<td>'.$record['Specialization'].'</td>';
                $table .='<td>'.$record['Doctor_Id'].'</td>'; 
                 $table .='</tr>';

              }
            $table .='</table>';
    }
  }
    ?>

<!DOCTYPE html>
<html>
	<head>
	<title>Doctor Details</title>
	<link rel="stylesheet" href="css/Details.css">
	</head>
	<body>
        <form action="DoctorDetails.php" method="post">
<h1>Doctor Details</h1> 

<div> 
<label for="DoctorId"><b>Doctor ID:</b></label>

<input type="text" placeholder="Enter DoctorID" name="DoctorId">
<input type="submit" name="submit1" value="OK">
</div>          
<div> 
        


<b>General details</b><br>
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