<?php require_once("../PHP/component.php") ?>


<?php require_once('Serversignup.php') ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>
    <?php require_once('header.php') ?>
    <!--<link rel="stylesheet" href="style.css"#26292c>-->

  </head>
  <body>
    <main>
      <div class="container text-center">






  <br><br>
  <h1 class="text-warning" style="text-align: left">Currently Showing</h1>


<!-- The carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
    aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/images/mynameiskhan.jpg" class="d-block w-100 h-100" alt="something went wrong">
    </div>
    <div class="carousel-item">
      <img src="css/images/joker5.jpg" class="d-block w-100 h-100" alt="something went wrong">
    </div>
    <div class="carousel-item">
      <img src="css/images/3idiots2.jpg" class="d-block w-100 h-100" alt="something went wrong">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<br><br>
<h1 class="text-warning" style="text-align: center">Now Showing</h1>


         <div class="row">
           <div class="clm">
             <a href="https://youtu.be/xvszmNXdM4w">

               <br>

             <img src="css/images/3idiots2.jpg" alt="movie"style="width:210px;height:220px;" /></a>

             <div class="image-description">
               <p>3idiots</p>
               <p class="d2">Description</p>
               <p class="d3">Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.
                     Integer et nisi ipsum.</p>
               <a class="moviebutton"; href="booking.php">book</a>

             </div>


           </div>


           <div class="clm">
             <a href="https://youtu.be/xvszmNXdM4w">

               <!-- <p><center class="moviename">My Name is Khan</center> -->

               <br>

             <img src="css/images/mynameiskhan.jpg" alt="movie"style="width:210px;height:220px;"></a>

             <div class="image-description">
               <p>My name is khan</p>
               <br>
               <p class="d2">Description</p>
               <p class="d3">Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.
                     Integer et nisi ipsum.</p>
               <a class="moviebutton"; href="booking.php">book</a>
               <!-- <button type="submit" name="button" class="bookb">book</button> -->


             </div>

           </div>

           <div class="clm">
             <a href="https://youtu.be/xvszmNXdM4w">

               <!-- <p><center class="moviename">Thappad</center> -->

               <br>

             <img src="css/images/thappad2.jpg" alt="movie"style="width:210px;height:220px;" /></a>

             <div class="image-description">
               <p>Thappad</p>
               <br>
               <p class="d2">Description</p>
               <p class="d3">Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.
                     Integer et nisi ipsum.</p>
               <a class="moviebutton"; href="booking.php">book</a>

             </div>

           </div>

           <div class="clm">
             <a href="https://www.youtube.com/watch?v=zAGVQLHvwOY">

               <!-- <p><center class="moviename">Joker</center> -->

               <br>

             <img src="css/images/joker.jpg" alt="movie"style="width:210px;height:220px;" /></a>

             <div class="image-description">
               <p>Joker</p>
               <br>
               <p class="d2">Description</p>
               <p class="d3">Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.
                     Integer et nisi ipsum.</p>
               <a class="moviebutton"; href="booking.php">book</a>

             </div>


           </div>

           <div class="clm">
             <a href="booking.php">

               <!-- <p><center class="moviename">Gone Girl</center> -->

             <!-- <img src="css/images/gone.jpg" alt="movie" style="width:200px;height:200px;%" /></a> -->
             <br>

           <img src="css/images/gone.jpg" alt="movie"style="width:210px;height:220px;" /></a>

           <div class="image-description">
             <p>Gone Girl</p>
             <br>
             <p class="d2">Description</p>
             <p class="d3">Lorem ipsum dolor sit amet,
                   consectetur adipiscing elit.
                   Integer et nisi ipsum.</p>
             <a class="moviebutton"; href="booking.php">book</a>

           </div>


           </div>


           <div class="clm">
             <a href="booking.php">

               <!-- <p ><center class="moviename">Pursuit of happiness</center>
               <?php if (isset($_POST['css/images/pursuit.jpg'])){

               } ?>

             <img src="css/images/pursuit.jpg" alt="movie" style="width:200px;height:200px;%" /></a> -->
             <br>

           <img src="css/images/pursuit.jpg" alt="movie"style="width:210px;height:220px;" /></a>

           <div class="image-description">
             <p>Pursuit of Happiness</p>
             <br>
             <p class="d2">Description</p>
             <p class="d3">Lorem ipsum dolor sit amet,
                   consectetur adipiscing elit.
                   Integer et nisi ipsum.</p>
             <a class="moviebutton"; href="booking.php">book</a>

           </div>


           </div>

           <div class="clm">
             <a href="booking.php">

               <!-- <p ><center class="moviename">Aynabaji</center>

             <img src="css/images/aynabaji.jpg" alt="movie" style="width:200px;height:200px;%" /></a> -->
             <br>

           <img src="css/images/aynabaji.jpg" alt="movie"style="width:210px;height:220px;" /></a>

           <div class="image-description">
             <p>aynabaji</p>
             <br>
             <p class="d2">Description</p>
             <p class="d3">Lorem ipsum dolor sit amet,
                   consectetur adipiscing elit.
                   Integer et nisi ipsum.</p>
             <a class="moviebutton"; href="booking.php">book</a>

           </div>


           </div>

           <div class="clm">
             <a href="booking.php">

               <!-- <p ><center class="moviename">Oggatonama</center>

             <img src="css/images/Oggatonama.jpg" alt="movie" style="width:200px;height:200px;%" /></a> -->
             <br>

           <img src="css/images/Oggatonama.jpg" alt="movie"style="width:210px;height:220px;" /></a>

           <div class="image-description">
             <p>Oggatonama</p>
             <br>
             <p class="d2">Description</p>
             <p class="d3">Lorem ipsum dolor sit amet,
                   consectetur adipiscing elit.
                   Integer et nisi ipsum.</p>
             <a class="moviebutton"; href="booking.php">book</a>

           </div>


           </div>

           <div class="clm">
             <a href="booking.php">

               <!-- <p><center class="moviename">Bomkesh</center>

             <img src="css/images/Bomkesh.jpg" alt="movie" style="width:200px;height:200px;%" /></a> -->
             <br>

           <img src="css/images/Bomkesh.jpg" alt="movie"style="width:210px;height:220px;" /></a>

           <div class="image-description">
             <p>Bomkesh</p>
             <br>
             <p class="d2">Description</p>
             <p class="d3">Lorem ipsum dolor sit amet,
                   consectetur adipiscing elit.
                   Integer et nisi ipsum.</p>
             <a class="moviebutton"; href="booking.php">book</a>

           </div>


           </div>
         </div>
           <!--<img src="image/3idiots.jpg" alt="Flowers in Chania">-->

</div>




<style media="screen">

</style>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<br><br>


     </video>

  </body>
</html>
<br><br>
<h1 class="text-warning" style="text-align: left">Trailers</h1>
<iframe width="400" height="200" src="https://www.youtube.com/embed/nqxgYT3TYzY"
title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen></iframe>

<iframe width="400" height="200" src="https://www.youtube.com/embed/zAGVQLHvwOY"
title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen></iframe>

<iframe width="400" height="200" src="https://www.youtube.com/embed/i4nlR9WK6-k"
title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
allowfullscreen></iframe>


<br><br>
<?php require_once('footer.php') ?>

<?php

if (isset($_POST['bookb'])) {
    header("location: http://localhost/PHP/booking.php");
  //echo " signup clicked";
// receive all input values from the form
} ?>
