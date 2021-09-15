<?php require_once("../PHP/component.php") ?>

<?php require_once('header.php') ?>
<!-- <?//php require_once('Serversignup.php') ?> -->

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

$userid=0;
$update= false;
$fullname=$username=$email=$pass='';
$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

?>


<?php

if (isset($_GET['edit'])) {


$userid = $_GET['edit'];
$update= true;

$result = $conn -> query("select * from signup where userid = $userid");


  $row= $result-> fetch_array();
  $fullname = $row['fullname'];
  $username = $row['username'];
  $email = $row['email'];
  $pass = $row['pass'];



// echo header("location: http://localhost/PHP/booking.php");
}


 ?>


 <?php
 if (isset($_POST['update'])) {


 $userid = $_POST['userid'];
 $fullname = $_POST['fullname'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];

 $_SESSION['message2'] = " Updated!!!";
 $_SESSION['msg_type2'] = "success";
 $result = $conn -> query("update signup set fullname='$fullname',
 username='$username', email='$email', pass='$pass' where userid=$userid");


   echo header("location: http://localhost/PHP/profile.php");
 }?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <main>
      <div class="row justify-content-center">
        <form class="" action="profileedit.php" method="post" autocomplete="off">
          <input type="hidden" name="userid" value="<?php echo $userid; ?>">
          <div class="form">
            <input class="profileedit" type="text" name="fullname" value="<?php echo $fullname; ?>" required><br>
            <input class="profileedit" type="text" name="username" value="<?php echo $username; ?>" required><br>
            <input class="profileedit" type="text" name="email" value="<?php echo $email; ?>" required><br>
            <input class="profileedit" type="text" name="pass" value="<?php echo $pass; ?>" required><br>


            <div class="button2">

                <?php button("btn-cancel","btn btn-success","Cancel","cancel","") ?>

                  <?php button("btn-cancel","btn btn-success","Update","update","") ?>
            </div>

          </div>
        </form>
      </div>

    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>
