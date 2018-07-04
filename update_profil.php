
<?php
   include "conn.php";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $uname = $_POST['username'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname']; 
      $loc = $_POST['loc'];
      
      $sql = "UPDATE daftar SET firstname='$fname', lastname='$lname', loc='$loc' WHERE username='$uname'";
      $result = $conn->query($sql);
      
         if($result){
         header("location: tampilprofil.php");
      }
      else{
         echo "Error";
      }
   }
?>
