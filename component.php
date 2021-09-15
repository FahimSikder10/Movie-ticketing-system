<?php //require_once('server.php') ?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

  function inputelement($text,$icon,$placeholder,$name,$value){

    $ele="
    <div class=\"input-group mb-3\">
<span class='$text' id=\"basic-addon1\">$icon</span>
<input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder'
class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" required>
</div<i class=\"fas fa-portrait\"></i>
";

echo $ele;
}

  function inputpass($text,$icon,$placeholder,$name,$value){

    $ele="
    <div class=\"input-group mb-3\">
<span class='$text' id=\"basic-addon1\">$icon</span>
<input type=\"password\" name='$name' value='$value' autocomplete=\"on\" placeholder='$placeholder'
class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" required>
</div<i class=\"fas fa-portrait\"></i>
";


echo $ele;

  }


  function button($btnid,$styleclass,$text,$name,$attr){

    $btn="

    <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>

    ";

    echo $btn;
  }



  // if (isset($_GET['delete'])) {
  //   $id=$_GET['delete'];
  //   $sql=("Delete FROM booking where id=$id") or die($sql->error());
  //   $query=mysqli_query($conn,$sql);
  //
  //   header("location: http://localhost/PHP/booking.php");
  //
  //
  // }

//if (isset($_GET['edit'])) {
//  $id=$_GET['edit'];
//  $r=("select * from booking where id=$id");
//  $q=mysqli_query($conn,$r);
//  if($row=mysqli_fetch_array($q)){
    //$row=$result->fetch_array;
//    $moviename=$row['moviename'];
//    $seat=$row['seat'];
//    $date=$row['date'];
//    $timing=$row['timing'];
//    $price=$row['pricing'];
//  }
//}
// here it starting


 ?>
