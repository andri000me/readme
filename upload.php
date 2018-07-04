<?php
  $msg = "";
  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "fanpage");
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

<!DOCTYPE html>
<?<?php 
  include "connection.php";
  include "session.php";
?>
 
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<style>

body
{
	background-color: #CC0000;
	margin-top: 0px;

}
</style>
</head>

<body>

<div class="background-atas"></div>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="upload.php">Upload</a></li>
  <li><a href="update.php">Update</a></li>
  <li><a href="video.php">Videos</a></li>
  <li><a href="delete.php">Delete</a></li>
  <li><a href="download.php">Download</a></li>

  <?php 
     if(!isset($_SESSION['login_user'])) 
     { 
  ?>
      <li style="float:right ; background-color: #FF9900">
      <a href="login.php">Log In!</a></li>
      <li style="float:right ; background-color: green">
      <a href="signup.php">Sign Up!</a></li>

  <?php
    } 
    else 
      { 
  ?>
      <li style="float:right ; background-color: darkred">
      <a href="logout.php">Log Out</a></li>
      <li style="float:right ; background-color: #20B2AA">
      <a href="account.php">Account</a></li>
  <?php 
    } 
  ?>

</ul>

<div class="container6">
<h3 style="text-align: center; color: #CC0033; ">Upload Something Here~</h3>



<div id="content">
      <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000" />
        <div>
          <input type="file" name="image" />
        </div>
        <div>
          <textarea name="text" cols="40" rows="4" placeholder="Say Something about This Image ..."></textarea>
        </div>
        <div>
          <input type="submit" name="upload" value="Upload">
        </div>
      </form>
</div>
</body>
</html>