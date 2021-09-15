<?php

session_start();

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
    <!--<link rel="stylesheet" href="style.css"    >-->

  </head>
  <body>
    <main>

      <?php
      if (isset($_SESSION['message4'])): ?>

       <div class="alert alert-<?=$_SESSION['msg_type4']?>">

         <?php echo $_SESSION['message4'];
         unset($_SESSION['message4']);
         ?>
       </div>
     <?php endif ?>

     <?php
     if (isset($_SESSION['message5'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type5']?>">

        <?php echo $_SESSION['message5'];
        unset($_SESSION['message5']);
        ?>
      </div>
    <?php endif ?>

    <?php
    if (isset($_SESSION['message6'])): ?>

     <div class="alert alert-<?=$_SESSION['msg_type6']?>">

       <?php echo $_SESSION['message6'];
       unset($_SESSION['message6']);
       ?>
     </div>
   <?php endif ?>

   <?php
   if (isset($_SESSION['message7'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type7']?>">

      <?php echo $_SESSION['message7'];
      unset($_SESSION['message7']);
      ?>
    </div>
  <?php endif ?>


        <div class="container text-center">
           <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-user-cog"></i>Admin Panel</h1>
 <!--<img src="image/3idiots.jpg" alt="Flowers in Chania">-->
</div>

      <!-- admin navigation bar -->

    <div class="sidebar-container">

  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="adminpanel.php">
        <i class="fa fa-home" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="adminuser.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> User
      </a>
    </li>

    <li>
      <a href="adminpanelmovies.php">
        <i class="fa fa-users" aria-hidden="true"></i> Movies
      </a>
    </li>
    <li>
      <a href="AdminBooking.php">
        <i class="fa fa-cog" aria-hidden="true"></i> Booking
      </a>
    </li><li>
      <a href="login.php">
        <i class="fa fa-cog" aria-hidden="true"></i> Logout
      </a>
    </li>

  </ul>
</div>





</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



</body>
</html>
