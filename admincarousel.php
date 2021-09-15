<?php


if (isset($_POST['submit']) && isset($_FILES['image'])) {

  echo "<pre>";
  print_r($_FILES['image']);
  echo "</pre>";
}else {
  header("Location")
}





 ?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="admincarousel.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" value=""><br>
      <input type="submit" name="submit" value="upload">
    </form>
  </body>
</html>
<style media="screen">
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
  }
</style>
