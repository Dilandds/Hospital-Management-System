<?php   require_once("connection.php"); ?>

<?php
if(isset($_POST['submit1'])){
    $user_id=$_POST['UserID'];
    $password=$_POST['NewPassword'];
            $query1 = "select Doctor_Id from doctor where Doctor_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query2 = "select Patient_Id from patient where Patient_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query3 = "select Staff_Id from staff where Staff_Id='{$user_id}' and User_Password='{$password}' limit 1";
            $query4 = "select Admin_Id  from Admin where Admin_Id='{$user_id}' and User_Password='{$password}' limit 1";
            
            
            $excecute1 = mysqli_query($connection,$query1);
            $excecute2 = mysqli_query($connection,$query2);
            $excecute3 = mysqli_query($connection,$query3);
            $excecute4 = mysqli_query($connection,$query4);

    
            if($excecute1){
                $query7="UPDATE doctor SET User_Password='{$password}'
            WHERE  Doctor_Id=$user_id";
              $result=mysqli_query($connection,$query7);
            }elseif($excecute2){
                 $query5="UPDATE patient SET User_Password='{$password}'
            WHERE  Patient_Id=$user_id";
             $result=mysqli_query($connection,$query5);
            }elseif($excecute3){
                 $query6="UPDATE staff SET User_Password='{$password}'
            WHERE  Staff_Id=$user_id";
            $result=mysqli_query($connection,$query6);
            }elseif($excecute4){
                 $query8="UPDATE admin SET User_Password='{$password}'
            WHERE  Admin_Id=$user_id";
            $result=mysqli_query($connection,$query8);
            }
           
           
            
           
           if($result){
                echo "password changed successfully";

            }else{
                 echo "failed to chage the password";
            }
        
}

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="css/Registration.css">
	</head>
	<body align="left">
        <form action="changepassword.php" method="post">
        
        <div> 
        
<h3>Change Paswword</h3>



        <label for="UserID"><b>User ID:</b></label>
        <input type="text"  name="UserID" required><br>

        <label for="New Password"><b>New Password:</b></label>
        <input type="password"  name="NewPassword"required> <?php echo "input a password with 8 characters"?><br>
         
       
         



        

      
        
       
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit1" value="Change Password" >
  <a href="loginpage.php">Go to login page</a>     
       </div>
       
 </form>
</body>
</html>
<?php mysqli_close($connection);?>