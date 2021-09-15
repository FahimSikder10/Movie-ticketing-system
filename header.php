<?php

session_start();
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f365c86edf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--Custom stylesheet-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  	<link rel="stylesheet" href="style3.css" type="text/css" media="all" />
    <style>
    body{background-color: #26292c;}
    </style>
    <!--<link rel="stylesheet" href="style.css"#26292c>-->

  </head>
  <body>
    <main>
      <?php
      if (isset($_SESSION['message'])): ?>

       <div class="alert alert-<?=$_SESSION['msg_type']?>">

         <?php echo $_SESSION['message'];
         unset($_SESSION['message']);
         ?>
       </div>
     <?php endif ?>

     <?php
     if (isset($_SESSION['message2'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type2']?>">

        <?php echo $_SESSION['message2'];
        unset($_SESSION['message2']);
        ?>
      </div>
    <?php endif ?>

    <?php
    if (isset($_SESSION['message3'])): ?>

     <div class="alert alert-<?=$_SESSION['msg_type3']?>">

       <?php echo $_SESSION['message3'];
       unset($_SESSION['message3']);
       ?>
     </div>
   <?php endif ?>


      <div class="container text-center">

         <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-film"></i> Mega</h1>
         <h1 class="myusername" style="color: rgb(64, 71, 241);"> Hello, <?php echo $username; ?></h1>
          <!-- <h1 class="myusername" style="color: rgb(64, 71, 241);"> Hello, <?php echo $userid; ?></h1> -->


         <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mainmenu.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="booking.php">Booking</a>
        </li>




        <div class="dropdown">
  <a class="nav-link active" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Categories
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="English.php">English</a></li>
    <li><a class="dropdown-item" href="hindi.php">Hindi</a></li>
    <li><a class="dropdown-item" href="bangla.php">Bangla</a></li>
  </ul>
</div>





        <li class="nav-item">
          <a class="nav-link active" href="signup.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


</div>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
