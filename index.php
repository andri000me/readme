<?php
	include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BacaQ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/smoothscroll.js" type="text/javascript" ></script>
</head>

<body>
<div class="container" id="header">
<div class="navbar">
		<img src="img/navbar1.png">
		<div class="menu">
			<ul>
  				<li><a href="#home">Beranda</a></li>
  				<li><a href="#about">Tentang</a></li>
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
  				<li><a href="#find-us">Cari Kami</a></li>

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
	<div >
		<img class="icon" id="icon-utama" src="img/logo.png">
		<a href="#home">
			<img class="icon" id="icon-kecil" src="img/icon1.png">
		</a>
	</div>
</div>

<div class="container" id="home">
	
	<div class="container-gambar">
		<img class="slide" src="img/dilan.jpg" style="width:100%">
		<img class="slide" src="img/chapter.jpg" style="width:100%">
		<img class="slide" src="img/supernova.jpg" style="width:100%">
		<img class="slide" src="img/banyak.jpg" style="width:100%">

		<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
    			var i;
    			var x = document.getElementsByClassName("slide");
    			for (i = 0; i < x.length; i++) {
      				x[i].style.display = "none"; 
    			}
    			slideIndex++;
    			if (slideIndex > x.length) {slideIndex = 1} 
    			x[slideIndex-1].style.display = "block"; 
    			setTimeout(carousel, 6000);
			}
		</script>
	</div>
</div>
	
<div  class="container" id="about">
	<div class="container-dalam" id="ab">
		<h1>tentang.</h1>
		<div class="container-dalam" id="kiri">
		<!-- Trigger the Modal -->
<img id="myImg" src="img/bgbook.png" alt="Orang baca buku" width="600">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
  </div>

  <script>
  	// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
  </script>

		</div>
		<div class="container-dalam" id="kanan">
			<p><strong>Read Me,</strong> adalah sebuah tempat nongkrong anak muda sembari menikmati indahnya dunia melalui buku, karena buku adalah jendela dunia.</p><br>
			<p>Maecenas eu luctus ex. Nunc venenatis ante erat, sed condimentum orci lacinia quis. Phasellus efficitur pharetra ligula, at rhoncus augue hendrerit nec. Vestibulum in enim tortor. Curabitur sit amet aliquam dolor. Aliquam placerat arcu odio, sed faucibus enim iaculis sed. Vivamus pretium ante ac nisi hendrerit, non pellentesque velit ullamcorper.</p>
		</div>
	</div>	
</div>

<div class="container" id="footer">
	<div class="container-dalam" id="find-us">
		<h1>cari kami.</h1>
		<div class="container-dalam" id="sos">
			<div class="sosmed" id="ig">
				<div class="katalog">
  					<a target="_blank" href="http://www.instagram.com/">
    					<img src="img/ig.png" alt="dilan" width="300">
  					</a>
  				<div class="desc">Instagram:<br>@readme</div>	
  				</div>
			<div class="sosmed" id="fb">
				<div class="katalog">
  					<a target="_blank" href="http://www.facebook.com/">
    					<img src="img/fb.png" alt="dilan" width="300">
  					</a>
  					<div class="desc">Facebook:<br>Read Me!</div>	
				</div>
			<div class="sosmed" id="twit">
				<div class="katalog">
  					<a target="_blank" href="http://www.twitter.com/">
    					<img src="img/tw.png" alt="dilan" width="300">
  					</a>
  					<div class="desc">Twitter:<br>@readme</div>	
				</div>
			<div class="sosmed" id="yutub">
				<div class="katalog">
  					<a target="_blank" href="http://www.youtube.com/">
    					<img src="img/yt.png" alt="dilan" width="300">
  					</a>
  					<div class="desc">Youtube:<br>Read Me!</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
