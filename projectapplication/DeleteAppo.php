<?php require_once('connection.php');?>
<?php
   //include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($connection,$_POST['userID']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']); 
      $appnum = mysqli_real_escape_string($connection,$_POST['num']); 
      
      $sql1 = "SELECT Staff_Id FROM staff WHERE Staff_Id = '$myid' and User_Password = '$mypassword'";
      $result1 = mysqli_query($connection,$sql1);
      $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count1 = mysqli_num_rows($result1);

      $sql3=  "SELECT Appoinment_Number FROM appoinment WHERE Appoinment_Number = '$appnum' ";
      $result2 = mysqli_query($connection,$sql3);
      $count2 = mysqli_num_rows($result2);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count1 == 1) {
         if($count2==1){
         $sql2 = "DELETE FROM appoinment WHERE Appoinment_Number = '$appnum' ";
         $result3 =mysqli_query($connection, $sql2);
              if ($result3) {
                   echo "Record deleted successfully";
              } else {
                   echo "Error deleting record:". mysqli_error($connection) ;
              }
        }else{
            echo "Wrong Appoinment_Number";
        }
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>

























<!DOCTYPE html >
<html>
<head>
<title>Delete Patient Record</title>
<link rel="stylesheet" type="text/css" href="css/Registration.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>Delete Patient Record</h3>
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
                <td><label for="num">Enter Appoinment Number</label></td>
                <td><input type="text" name="num" id="num"></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Delete" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
    </form>
    <button type="button1" onclick="location.href='staffInformation.php'">Back</button>
		</div>
</body>
</html>
<?php mysqli_close($connection);?>