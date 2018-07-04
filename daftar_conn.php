<?php
	include "conn.php";
       
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
  
 		$email = $_POST['email'];
 		$uname = $_POST['username'];
 		$password = $_POST['password'];
 		// $cpassword = $_POST['cpassword'];
   //      $enc_password = md5($password); 

		$sql = "INSERT INTO daftar VALUES ('$uname', '$password', '$email')";
		$result = $conn->query($sql);
		if ($result)
		{ 
			header("location: masuk.php");
		}
		else
		{ 
			echo "Error";
		}
	}
?>