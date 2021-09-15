<?php require_once("../PHP/component.php") ?>
<?php require_once("../PHP/AdminHeader.php") ?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);



  $query = "SELECT userid FROM signup";
  $query_run = mysqli_query($conn, $query);
  $row = mysqli_num_rows($query_run);
  //echo '<h4> Total Users: '.$row.'</h4>';
  $query = "SELECT movieid FROM movies";
  $query_run = mysqli_query($conn, $query);
  $ro = mysqli_num_rows($query_run);

  $query = "SELECT id FROM book";
  $query_run = mysqli_query($conn, $query);
  $r = mysqli_num_rows($query_run);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>

  </head>
  <body>
    <main>

      <div class="dashboard">

        <div class="">
          <h1>Total Users &nbsp; &nbsp;</h1>
          <h4 class="totalnumber"><?php echo "$row" ; ?></h4>
        </div>


        <div class="">
          <h1>Total Movies  &nbsp; &nbsp;</h1>
          <h4 class="totalnumber"><?php echo "$ro" ; ?></h4>
        </div>


        <div class="">
          <h1>Total Booking</h1>
          <h4 class="totalnumber"><?php echo "$r" ; ?></h4>


      </div>






    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



  </body>
</html>
