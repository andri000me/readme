<?php
  $msg = "";
  if (isset($_POST['upload'])) {
    $target = "upload/".basename($_FILES['image']['name']);
     $db = mysqli_connect("10.151.63.63", "user-pweb", "user-pweb1718", "PW2_B_5115100043");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image Uploaded Successfully";
    } else {
      $msg = "There Was A problem Uploading Image";
    }
  }
?>

<?php 
  include "conn.php";
  include "session.php";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BacaQ - Ganti Foto</title>
  <link rel="stylesheet" type="text/css" href="css/style-anak.css" media="screen"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/smoothscroll.js" type="text/javascript" ></script>
</head>

<body>
<div class="container" id="catalogue">
<div class="navbar">
    <img src="img/navbar1.png">
    <div class="menu">
      <ul>
          <li><a href="index.php#home">Beranda</a></li>
          <li><a href="index.php#about">Tentang</a></li>
        <?php
          if(isset($_SESSION['login_user']))
        { 
      ?>
          <li><a href="rakq.php">RakQ</a></li>
        <?php
          }
        ?>
          <li class="dropdown">
            <a href="javascript:void(0)">Kata Orang</a>
            <div class="dropdown-content">
              <a href="kata_orang.php">Review Buku</a>
              <a href="kata_orang.php">Quotes</a>
              <a href="kata_orang.php">Puisi dan Sajak</a>
            </div>
          </li>
          <li><a href="index.php#find-us">Cari Kami</a></li>

          <?php
            if(!isset($_SESSION['login_user']))
          { 
        ?>
            <li><a href="masuk.php">Masuk/Daftar</a></li>
          <?php
            }
            else
            {
          ?>
          <li class="dropdown">
          <a href="javascript:void(0)">AkunQ</a>
            <div class="dropdown-content">
              <a href="edit_profil.php">Edit</a>
              <a href="hapus.php">Hapus</a>
              <a href="keluar.php">Keluar</a>

            </div>
          </li>
          <?php
            }
          ?>
          
      </ul>
    </div>
  </div>

<?php  
  $db = mysqli_connect("10.151.63.63", "user-pweb", "user-pweb1718", "PW2_B_5115100043");
  $sql = "SELECT * from images";
  $result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "<div id= 'img_div'>";
      echo "<a href='upload/".$row['image']."' download>";
      echo "<img width='480px' src='upload/".$row['image']."' >";
      echo "</a>";
      echo "<p>".$row['text']. "</p>";
    echo "</div>";
  }
?>


<div class="box" id="box-foto">
    <form method="post" action="gantifoto.php" enctype="multipart/form-data">
    <h1><strong>Unggah Foto.</strong></h1>
        <input type="hidden" name="size" value="1000000" />
        <div>
          <input type="file" name="image" />
        </div>
        <div>
          <textarea name="text" cols="100" rows="10" placeholder="Katakan sesuatu" style="height: 300px; width: 400px; margin-left: 40px;"></textarea>
        </div>
        <div>
          <input type="submit" name="upload" value="Upload">
        </div>
      </form>

    </div>
      

</div></body></html>