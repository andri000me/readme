<!-- Untuk menyambungkan dengan database -->

<?php 
	// connect ke database luar
	// $host = "10.151.63.63"; 
	// $user = "user-pweb"; 
	// $pass = "user-pweb1718"; 
	// $db = "PW2_B_5115100043"; 

	// connect ke database local
	$host = "localhost"; 
	$user = "root"; 
	$pass = ""; 
	$db = "readme";

	$conn = new mysqli ($host, $user, $pass, $db);
	
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
?>
