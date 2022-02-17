<?php   require_once("connection.php"); ?>

<?php
if(isset($_POST['submit1'])){
    $Gender=$_POST['gender'];
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Age=$_POST['Age'];
    $TelNumber=$_POST['TelNumber'];
    //$DutyHour=$_POST['DutyHour'];
    $Address=$_POST['Address'];
    $StaffID=$_POST['StaffID'];
    $password=$_POST['psw'];
    //$hashed_password=sha1($password);
    //echo  $hashed_password;



    $query= " INSERT INTO patient(Gender,First_Name,Last_Name,Age,Mobile_No,Address,User_Password,Staff_Id)
            VALUES ('{$Gender}','{$FirstName}','{$LastName}',{$Age},{$TelNumber},'{$Address}','{$password}','{$StaffID}')";

        $result=mysqli_query($connection,$query);


        if($result){
            echo "registration successful";
            }else{
            echo "registration not successful";
            }
        
}

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Staff registartion</title>
	<link rel="stylesheet" href="css/Registration.css">
	</head>
	<body align="left">
        <form action="staff registration.php" method="post">
        
        <div> 
        
<h3>Staff Registration</h3>

<table align="left"> 
<tr style="width:10px">
<th style="text-align:left">
Gender:</th>
<td align="left" colspan="2">
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
</tr>
</table>    
<br><br><br><br>   
   
        <label for="FirstName"><b>First Name:</b></label>
        <input type="text"  name="FirstName" required><br>
        
        <label for="LastName"><b>Last Name:</b></label>
        <input type="text"  name="LastName" required><br>

        <label for="Age"><b>Age:</b></label>
        <input type="text"  name="Age"required><br>
        
        <label for="TelNumber"><b>Tel Number:</b></label>
        <input type="text"  name="TelNumber" required><br>
         

         <label for="psw"><b>Password</b></label>
        <input type="password" name="psw" required><br>



        <label for="Address"><b>Address:</b></label>
        <input type="text"  name="Address" required><br>

       <label for="StaffID"><b>Staff ID:</b></label>
        <input type="text"  name="StaffID" required><br>
       <!-- <label for="Duty Hour"><b>Duty Hour:</b></label>
       <input type="text"  name="DutyHour" required><br><br><br><br><br> -->

       
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit1" value="SUBMIT" >
        
       </div>
       <div>
<button type="button1" onclick="history.back()">Back</button>
<button type="button2" onclick="location.href='loginpage.php'">Logout</button>
  </div>
 </form>
</body>
</html>
<?php mysqli_close($connection);?>