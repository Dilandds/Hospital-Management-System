<?php require_once('connection.php');?>
<?php
   //include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($connection,$_POST['userID']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      $id = mysqli_real_escape_string($connection,$_POST['user_id']); 
      $docmed = mysqli_real_escape_string($connection,$_POST['med']); 
         $docdis = mysqli_real_escape_string($connection,$_POST['dis']);
            $docnote = mysqli_real_escape_string($connection,$_POST['note']);


      
      $sql1 = "SELECT Doctor_Id FROM doctor WHERE Doctor_Id = '$myid' and User_Password = '$mypassword'";
      $result1 = mysqli_query($connection,$sql1);
      $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count1 = mysqli_num_rows($result1);

      $sql2=  "SELECT Patient_Id FROM patient WHERE Patient_Id = '$id' ";
      $result2 = mysqli_query($connection,$sql2);
      $count2 = mysqli_num_rows($result2);

       
      if($count1 == 1) {//user id and password correct
          if($count2==1){//if the patient id is correct
            if ($docmed!=""){
               $q1 = "UPDATE medicalrecord SET Medicines ='$docmed' WHERE Patient_ID='$id'";
               //$sql2 = "DELETE FROM staff WHERE Staff_Id='$id'";
               $result3 =mysqli_query($connection, $q1);
              if ($result3) {
                   echo mysqli_affected_rows($connection)."-Medicine Record updated successfully  ";
              } else {
                   echo "Database query failed". mysqli_error($connection) ;
              }
      // If result matched $myusername and $mypassword, table row must be 1 row
            }
            if ($docdis!=""){
                      $q2 = "UPDATE medicalrecord SET Disease ='$docdis' WHERE Patient_ID='$id'";
               //$sql2 = "DELETE FROM staff WHERE Staff_Id='$id'";
               $result4 =mysqli_query($connection, $q2);
              if ($result4) {
                   echo mysqli_affected_rows($connection)."-Disease Record updated successfully  ";
              } else {
                   echo "Database query failed". mysqli_error($connection) ;
              }
            } 
            if ($docnote!=""){
                      $q3 = "UPDATE medicalrecord SET specialNote ='$docnote' WHERE Patient_ID='$id'";
               //$sql2 = "DELETE FROM staff WHERE Staff_Id='$id'";
               $result5 =mysqli_query($connection, $q3);
              if ($result5) {
                   echo mysqli_affected_rows($connection)."-Note Record updated successfully  ";
              } else {
                   echo "Database query failed". mysqli_error($connection) ;
              }
            } 

          }else{
            echo "Wrong patient ID";
          }
        
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html >
<html>
<head>
<title>Update Patient Record</title>
<link rel="stylesheet" type="text/css" href="css/Registration.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>Update Patient Record</h3>
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
                <td><label for="user_id">Enter patient ID</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="med">Medicines</label></td>
                <td><input type="text" name="med" id="med"></td>
            </tr>
			<tr>
                <td><label for="dis">Disease</label></td>
                <td><input type="text" name="dis" id="dis"></td>
            </tr>
            <tr>
                <td><label for="note">Notes</label></td>
                <td><input type="textarea" name="note" id="note" rows="10" cols="50"></td>
            </tr>


            <tr>

				
                <td><input type="submit" value="Update" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>


    </form>
      <button type="button1" onclick="location.href='DoctorInformation.php'">Back</button>
		</div>

</body>
</html>
<?php mysqli_close($connection);?>