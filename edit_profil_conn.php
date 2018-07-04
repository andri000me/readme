
<?php
   include "koneksi.php";
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {

      $nama = $_POST['nama'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $fb = $_POST['facebook'];
      $foto = $_POST['foto'];
      
      $sql = "UPDATE teman SET nama='$nama', gender='$gender', email='$email', fb='$facebook', foto='$foto' WHERE username='$uname'";
      $result = $conn->query($sql);
      
      if($result)
      {
         header("location: index.php");
      }
      else{
         echo "Error";
      }
   }
?>
