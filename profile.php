<?php require_once("../PHP/component.php") ?>
  <?php require_once('header.php') ?>

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


$sql = "SELECT * FROM signup where userid = $userid";
$result = $conn->query($sql);



?>





<?php require_once('Serversignup.php') ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <!-- <div class="container">
    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>

            <?php while ($row = $result->fetch_assoc()):?>
                <tr>
                  <th>Full name: </th>
                  <td><?php echo $row['fullname'] ?></td>
                  </tr>
                  <tr>
                  <th>Username: </th>
                    <td><?php echo $row['username'] ?></td>
                    </tr>
                    <tr>
                    <th>Email: </th>
                      <td><?php echo $row['email'] ?></td>
                      </tr>
                      <tr>
                      <th>Password: </th>
                        <td><?php echo $row['pass'] ?></td>
                        </tr>



              <?php endwhile; ?>



          </tr>
        </thead>
      </table>


    </div>

  </div> -->

  <div class="row justify-content-center">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>

      <?php


      $records = mysqli_query($conn,"select * from signup where userid = $userid"); // fetch data from database

      while($data = mysqli_fetch_array($records)){
        ?>
        <tr>
          <td><?php echo $data['fullname'];?></td>
          <td><?php echo $data['username'];?></td>
          <td><?php echo $data['email'];?></td>
          <td><?php echo $data['pass'];?></td>

          <td>

            <a href="profileedit.php?edit=<?php echo $data['userid']; ?>"
            class="btn btn-info">Edit</a>
          </td>


          <td>



          </td>

        </tr> <?php } ?>

    </table>
  </div>



<!-- <style media="screen">


  .edit{

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
    transition: background 0.5s linear;
    text-align: center;


  }
  .edit:hover{

    background: rgb(82, 130, 237);

  }

</style> -->

  </body>
</html>
