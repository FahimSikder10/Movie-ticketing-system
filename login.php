
<?php require_once("../PHP/component.php") ?>



<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);



if (isset($_POST['login'])) {



    $userid =$_SESSION['userid'];
    $user =$_POST['username'];
    $password =$_POST['password'];


    $user = stripslashes($user);
    $password = stripslashes($password);
    $user = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
  //$username = ($_POST['username']);
  //$password = ($_POST['password']);


  //$username= stripcslashes($username);
  //$password= stripcslashes($password);


//$query = "SELECT * FROM signup where pword='$passwordasswor' and username='$usernam'";
//$result=mysqli_query($db,$query);
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      //$row1=mysqli_num_rows($query);
if($user=="admin1" and $password=="admin1") {
  header("location: http://localhost/PHP/adminuser.php");
} else {
         //session_register("myusername");
         //$_SESSION['login_user'] = $username;
         $query = "SELECT * FROM signup where username='$user' and pass='$password'";
         //or die("failed to query database".mysql_error());
         $result=mysqli_query($conn,$query);
         $row = mysqli_fetch_array($result);


         if ($row['username']==$user && $row['pass']== $password){

           $userid = $row['userid'];
           $_SESSION['userid'] = $userid;
           $_SESSION['username'] = $_POST['username'];
           //$userid="select userid from signup where $user='username'";
           header("location: http://localhost/PHP/mainmenu.php");
         }else {

           header("location:login.php");
           // ?Invaluserid = Please enter correct username or password
         }
         //header("location: http://localhost/PHP/Home.php");
      }
//$row=mysqli_num_rows($query)
//$row1=mysqli_fetch_array($query);
//$row['username']==$username and $row['password']==$password
//if ($row['username']==$username and $row['password']==$password){
  //header("location:Home.php");
//}else {
  //echo "login unsucessful";
//}

}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>
    <script src="https://kit.fontawesome.com/f365c86edf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- #26292c; -->
    <style>
    body{background-color: #26292c}
    </style>
    <!--Custom stylesheet-->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <main>
      <div class="container text-center">
         <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-film"></i> Mega</h1>


         <div class="d-flex justify-content-center">
           <form class="w-50" action="" method="post">
               <input type="hidden" name="userid" value="<?php echo $userid; ?>">
             <div class="username" required>
               <?php inputelement("input-group-text bg-warning","<i class='fas fa-portrait'></i>","Username","username",""); ?>
             </div>


             <div class="pass" required>
               <?php inputpass("input-group-text bg-danger","<i class='fas fa-lock'></i>","Password","password",""); ?>
             </div>



             </div>



             <!--<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>-->
    <div class="button">

      <?php button("btn-cancel","btn btn-success","Cancel","cancel","") ?>
      <?php button("btn-Signup","btn btn-success","Login","login","") ?>
    </div>
    <a href="signup.php" class="signupbutton">Signup</a><br>

<style media="screen">
  .signupbutton{
    text-decoration: none;
    position: relative;
    left: 500px;
    bottom: 215px;
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
