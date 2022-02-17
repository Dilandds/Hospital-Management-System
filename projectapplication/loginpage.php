<?php session_start();?>
<?php 	require_once("connection.php"); ?>
<?php

$user_id = $password = "";
$user_id_err = $password_err = $query1_err = $result1_err = "";

if (isset($_POST['submit1'])) {


        if(!isset($_POST['uId']) || strlen(trim($_POST['uId']))<1){
            $user_id_err = "*ID Required!";
        }
        else{
            $user_id = mysqli_real_escape_string($connection,$_POST['uId']);
        }

    if(!isset($_POST['psw']) || strlen(trim($_POST['psw']))<1){
            $password_err = "*Password Required!";
        }
        else{
            $password = mysqli_real_escape_string($connection,$_POST['psw']);
        }

        if (empty($user_id_err) && empty($password_err)) {
            $query1 = "select Doctor_Id from doctor where Doctor_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query2 = "select Patient_Id from patient where Patient_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query3 = "select Staff_Id from staff where Staff_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query4 = "select Admin_Id  from Admin where Admin_Id='{$user_id}' and User_Password='{$password}' limit 1";
            
            
            $excecute1 = mysqli_query($connection,$query1);
            $excecute2 = mysqli_query($connection,$query2);
            $excecute3 = mysqli_query($connection,$query3);
            $excecute4 = mysqli_query($connection,$query4);

            $result1 = mysqli_fetch_assoc($excecute1);
            $result2 = mysqli_fetch_assoc($excecute2);
            $result3 = mysqli_fetch_assoc($excecute3);
            $result4 = mysqli_fetch_assoc($excecute4);

            if($result1){
                $_SESSION['uId']=$result1['Doctor_Id'];
                 $_SESSION['val']=1;
                header('Location:DoctorInformation.php');
            }
             else if($result2){
                 $_SESSION['uId']=$result1['Patient_Id'];
                  $_SESSION['val']=2;

                header('Location:patientinformation.php');
            }
             else if($result3){

                 
                 $_SESSION['uId']=$result1['Staff_Id'];
                  $_SESSION['val']=3;
                header('Location:staffInformation.php');
           }else if($result4){
                 $_SESSION['uId']=$result1['Admin_Id'];
                   $_SESSION['val']=4;
                header('Location:Home page.php');
           }

                else{$result1_err = "*Invalid User ID or Password";}
            }
            else{$query1_err = "*Database query failed";}
        }
    

?>



<!DOCTYPE html>
<html>
	<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/loginpage.css">
	</head>
	<body align="center">
        <form  action="loginpage.php"  method="post">
        <div class="center"> 
        <h1>WELCOME TO THE HOSPITAL MANAGEMENT SYSTEM</h1><br>
        <p align="center" ><i>health is the most precious gift</i></p>

        <img src="images/logo.jpg" class="logo"><br><br>
           
        <label for="uname"><b>UserID</b></label>
        <input type="text" <?php echo 'value="'.$user_id.'"';?>placeholder="Enter UserID" name="uId" required><br>
       
        <?php echo "<span><b>". $user_id_err . "</b></span>"; ?>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password *8 characters" name="psw" required><br><br>
       
        <?php echo "<span><b>". $password_err . "</b></span>"; ?>
        <input type="submit" name="submit1" value="Login" >
        <a href="changepassword.php">Change Password</a> 

       </div>
      
        <div>
        <?php echo "<span><b>". $query1_err . "</b></span>"; ?>
        <?php  echo "<span><b>". $result1_err . "</b></span>"; ?> 
    </div>
 </form>
</body>
</html
<?php mysqli_close($connection);?>