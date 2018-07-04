<?php
	session_start();
	unset ($_SESSION['login_user']);
	session_destroy();
	if(isset($_SERVER['HTTP_REFERER']))
	{
		header('Location: index.php');  
	} 
	else
	{
		header('Location: index.php');  
	}
	exit;
?>