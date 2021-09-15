
<?php require_once("../PHP/component.php") ?>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// if (!$conn) {
//   echo "not";
// }else {
//   echo "done";
// }

//data insert into table signup by clicking signup
if (isset($_POST['signup'])) {

  //echo " signup clicked";
// receive all input values from the form
$fullname = ($_POST['fullname']);
$username = ($_POST['username']);
$email = ($_POST['email']);
$password = ($_POST['password']);

// $fullname = $username = $email = $password = "";
// $fullnameerr = $usernameerr= $emailerr = $passworderr = "";
// // $name = $email = $gender = $comment = $website = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["fullname"])) {
//     $fullnameerr = "Fullname is required";
//   }else {
//     $fullname = test_input($_POST["fullname"]);
//   }
//
//   if (empty($_POST["username"])) {
//     $usernameerr = "Username is required";
//   }else {
//     $username = test_input($_POST["username"]);
//   }
//
//   if (empty($_POST["email"])) {
//     $emailerr = "email is required";
//   }else {
//     $email = test_input($_POST["email"]);
//   }
//
//   if (empty($_POST["pass"])) {
//     $passworderr = "password is required";
//   }else {
//     $password = test_input($_POST["pass"]);
//   }
// }

// $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
// $username = mysqli_real_escape_string($db, $_POST['username']);
// $email = mysqli_real_escape_string($db, $_POST['email']);
// $password = mysqli_real_escape_string($db, $_POST['password']);

// if (empty($fullname)) { array_push($errors, "fullname is required"); }
// if (empty($username)) { array_push($errors, "Username is required"); }
//     if (empty($email)) { array_push($errors, "Email is required"); }
//     if (empty($password)) { array_push($errors, "Password is required"); }

$sql ="Insert into signup(fullname,username,email,pass) values('$fullname','$username','$email','$password')";
$conn->query($sql);


echo header("location: http://localhost/PHP/login.php");

}
?>
<?php if (isset($_POST['cancel'])) {
  echo "Thank You For Visiting";
} ?>
<!--$query_run = mysql_query($query,$db);
//$result=mysql_fetch_row()-->













<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>
    <script src="https://kit.fontawesome.com/f365c86edf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- #26292c; -->
    <style>
    body{background-color: #26292c;}
    </style>
    <!--Custom stylesheet-->
    <!--<link rel="stylesheet" href="style.css">-->

  </head>
  <body>
    <main>
      <div class="container text-center">
         <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-film"></i> Mega</h1>

         <div class="d-flex justify-content-center">
           <form class="w-50" action="" method="post">

             <div class="fullname">
               <?php inputelement("input-group-text bg-warning","<i class='fas fa-user'></i>","Fullname","fullname",""); ?>


             </div>

             <div class="username">
               <?php inputelement("input-group-text bg-warning","<i class='fas fa-portrait'></i>","Username","username",""); ?>
             </div>


             <div class="email">
               <?php inputelement("input-group-text bg-info","<i class='fas fa-envelope'></i>","Email","email",""); ?>
             </div>

             <div class="password">
               <?php inputpass("input-group-text bg-danger","<i class='fas fa-lock'></i>","Password","password",""); ?>
             </div>
             </div>


             <p class="warning">By creating an account you agree to our Terms & Privacy</p>
             <style media="screen">
               .warning{
                 color: red;
               }
             </style>

             <!--<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>-->
    <div class="button">

      <?php button("btn-cancel","btn btn-success","Cancel","cancel","") ?>
      <?php button("btn-Signup","btn btn-success","Signup","signup","") ?>
    </div>

      <a href="login.php" class="loginbutton">Login</a><br>
      <style media="screen">
        .loginbutton{
          text-decoration: none;
          position: relative;
          left: 500px;
          bottom: 360px;
        }
        </style>

           </form>
         </div>
      </div>

    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>
