
<?php
	include "conn.php";

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      $uname = $_POST['username'];
      $passw = $_POST['password']; 
      
      $sql = "SELECT * FROM daftar WHERE username = '$uname' AND password = '$passw'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // Jika usename dan password cocok
      if($count == 1)
      {
         session_start();

         $_SESSION['login_user'] = $uname;
         $user_check = $_SESSION['login_user'];

         $ses_sql = mysqli_query($conn,"SELECT username FROM daftar WHERE username = '$user_check'");
   
         $row = mysqli_fetch_array ($ses_sql, MYSQLI_ASSOC);
   
         $login_session = $row['username'];
         
         header("location: index.php");
      }
      else 
      {
         if(empty($uname) || empty($passw))
         {
            $error = "Masukkan username dan password!";
            echo $error;
         }
         else
         {
            $error = "Username dan password tidak cocok!";
            echo $error;
            // header("location: masuk.php");
         }
      }
   }
?>
