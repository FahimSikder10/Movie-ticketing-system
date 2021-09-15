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

$sql = "SELECT * FROM book";
$result = $conn->query($sql);

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("delete from book where id=$id");

  $_SESSION['message5'] = "Booking deleted!!!";
  $_SESSION['msg_type5'] = "danger";
  echo header("location: http://localhost/PHP/adminbooking.php");

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
            <th>Movie Name</th>
            <th>Seat</th>
            <th>Date</th>
            <th>Timing</th>
          

            <th colspan="1">Action</th>


            <?php while ($row = $result->fetch_assoc()):?>

              <tr>
                <td><?php echo $row['moviename'] ?></td>
                  <td><?php echo $row['seat'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['timing'] ?></td>



                    <td>
                      <a href="adminbooking.php?delete=<?php echo $row['id']; ?>"
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
