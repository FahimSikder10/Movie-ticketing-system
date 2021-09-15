<?php require_once("../PHP/component.php") ?>
<?php require_once("../PHP/AdminHeader.php") ?>



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

$sql = "SELECT userid, fullname, username, email, pass FROM signup";
$result = $conn->query($sql);

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];



  $conn->query("delete from signup where userid=$id");

  $_SESSION['message4'] = "User Deleted!!!";
  $_SESSION['msg_type4'] = "danger";
  echo header("location: http://localhost/PHP/adminuser.php");

}

?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cinema project</title>

  </head>
  <body>
    <main>
        <div class="container text-center">



  <!-- Table for the user details -->

<br><br>

      <table class="center">
        <thead>
          <tr>
            <th>Fullname</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="1">Action</th>


            <?php while ($row = $result->fetch_assoc()):?>

              <tr>
                <td><?php echo $row['fullname'] ?></td>
                  <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                      <a href="adminuser.php?delete=<?php echo $row['userid']; ?>"
                      class="btn btn-info">Delete</a>

                    </td>
              </tr>




              <?php endwhile; ?>


          </tr>
        </thead>
      </table>




    <!-- </div>


</div> -->





    </main>



  </body>
</html>







<!-- <div>








<style media="screen">


  /* .edit{

    padding: 200px;
    margin: auto;
    text-align: center;
    height: 50px;
    width: 50px;
     margin: 30px 10px;
    padding: 15px 10px;
    text-decoration: none;
    border: none;
    font-weight: 600;
    font-size: 20px;
    color: white;
    background: rgba(51, 55, 245);
     /* transform: scale(2.5); */
    transition: background 2s linear;
    text-align: center;


  } */
  /* .edit:hover{

    background: red;

  } */

</style>

  </body>
</html>
