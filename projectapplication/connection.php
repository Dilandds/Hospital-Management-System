<?php 
	$connection = mysqli_connect('localhost','root','','hospital');
	if (mysqli_connect_errno()) {
		die("Database connection failed. " . mysqli_connect_error());
	}//else{
		//echo "connection successful";
	//}

 ?>