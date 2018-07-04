
<?php
   include "conn.php";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $uname = $_POST['username'];
      $passw = $_POST['password']; 
      $newpassw = $_POST['npassword'];
      
      $sql = "UPDATE daftar SET password='$newpassw' WHERE username='$uname'";
      $result = $conn->query($sql);
      
         if($result){
         header("location: index.php");
      }
      else{
         echo "Error";
      }
   }
?>
