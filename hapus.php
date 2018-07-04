<?php
   include "conn.php";
   include "session.php";

   $deleteaccount = $_SESSION['login_user'];
   $sql = "DELETE FROM daftar WHERE username = '$deleteaccount'";
   $result = $conn->query($sql);

   unset ($_SESSION['login_user']);
   session_destroy();
      
      if($result){
         header("location: masuk.php");
      }
      else{
         echo "Error";
      }
   
?>