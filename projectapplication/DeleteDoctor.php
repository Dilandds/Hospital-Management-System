<?php require_once('connection.php');?>
<?php
   //include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($connection,$_POST['userID']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      $id = mysqli_real_escape_string($connection,$_POST['user_id']); 
      
      $sql1 = "SELECT Admin_Id FROM admin WHERE Admin_Id = '$myid' and User_Password = '$mypassword'";
      $result1 = mysqli_query($connection,$sql1);
      $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count1 = mysqli_num_rows($result1);

      $sql3=  "SELECT Doctor_Id FROM doctor WHERE Doctor_Id = '$id' ";
      $result2 = mysqli_query($connection,$sql3);
      $count2 = mysqli_num_rows($result2);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count1 == 1) {
         if($count2==1){
         $sql2 = "DELETE FROM doctor WHERE Doctor_Id='$id'";
         $result3 =mysqli_query($connection, $sql2);
              if ($result3) {
                   echo "Record deleted successfully";
              } else {
                   echo "Error deleting record:". mysqli_error($connection) ;
              }
        }else{
            echo "wrong Doctor ID";
        }
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>







<!DOCTYPE html >
<html>
<head>
<title>Delete Doctor Record</title>
<link rel="stylesheet" type="text/css" href="css/Registration.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>Delete Doctor Record</h3>
    <form id="login-form" method="post" action="" >
        <table border="0.5" >
            <tr>
                <td><label for="userID">Enter Your ID</label></td>
                <td><input type="text" name="userID" id="userID"></input></td>
            </tr>
            
            <tr>
                <td><label for="password">Enter Your Password</label></td>
                <td><input type="password" name="password" id="password"></input></td>
            </tr>
            <tr>
                <td><label for="user_id">Enter Doctor ID</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Delete" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>

         <button type="button1" name="submit2">Back</button>
        <?php 

if (isset($_POST['submit2']) ){
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
    </form>
		</div>
</body>
</html>
<?php mysqli_close($connection);?>