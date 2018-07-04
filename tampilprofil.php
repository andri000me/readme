<?php
  include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BacaQ - ProfilQ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/smoothscroll.js" type="text/javascript" ></script>
</head>

<body>
<div class="container" style="background-color: white">
<div class="navbar">
    <img src="img/navbar1.png">
    <div class="menu">
      <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="index.php">Tentang</a></li>
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
          <li><a href="index.php">Cari Kami</a></li>

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
  
<div  class="container" id="about">
  <div class="container-dalam" id="ab">
    <h1 style="text-align: center;">profilQ.</h1>

    <?php
      $sql = "SELECT"

</div>
</div>

</body>

</html>