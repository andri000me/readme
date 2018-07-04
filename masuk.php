<?php
  include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BacaQ - Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/style-anak.css" media="screen"/>
</head>

<body>
<div class="container" id="sign-in">
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

		<div class="box" id="box-masuk">
		<form action="masuk_query.php" method="post">
			<h1><strong>Masuk.</strong></h1>
			<input type="text" name="username" placeholder="Username"/>
			<input type="password" name="password" placeholder="Password"/>
			<button type="submit" class="btn"><strong>Masuk</strong></button>
      
		</form>
    <a href="daftar.php"><button><strong> Daftar</strong></button></a>
		</div>
	</div>
</body>
</html>
