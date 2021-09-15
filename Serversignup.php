<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  echo "not";
}else {
  echo "d";
}

//data insert into table signup by clicking signup
if (isset($_POST['signup'])) {

  //echo " signup clicked";
// receive all input values from the form
// $fullname = ($_POST['fullname']);
// $username = ($_POST['username']);
// $email = ($_POST['email']);
// $password = ($_POST['password']);

// $fullname = $username = $email = $password = "";
// $fullnameerr = $usernameerr= $emailerr = $passworderr = "";
// // $name = $email = $gender = $comment = $website = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["Fullname"])) {
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

$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if (empty($fullname)) { array_push($errors, "fullname is required"); }
if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

$sql ="Insert into signup(fullname,username,email,pass) values('$fullname','$username','$email','$password')";
$conn->query($sql);


echo header("location: http://localhost/PHP/mainmenu.php");

}
?>
<?php if (isset($_POST['cancel'])) {
  echo "Thank You For Visiting";
} ?>
<!--$query_run = mysql_query($query,$db);
//$result=mysql_fetch_row()-->
