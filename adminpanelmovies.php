
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
$id=0;
$update= false;
$moviename=$seat=$date=$timing='';
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if (isset($_POST['submit'])) {

$moviename = ($_POST['moviename']);
$seat = ($_POST['seat']);
$date = ($_POST['date']);
$timing = ($_POST['timing']);



$sql ="Insert into movies(moviename,seat,date,timing) values('$moviename','$seat','$date','$timing')";
$conn->query($sql);




echo header("location: http://localhost/PHP/adminpanelmovies.php");
$_SESSION['message5'] = "Movie Added!!!";
$_SESSION['msg_type5'] = "success";




}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("delete from movies where movieid=$id");
  $_SESSION['message5'] = "Movie Deleted!!!";
  $_SESSION['msg_type5'] = "danger";
  echo header("location: http://localhost/PHP/adminpanelmovies.php");

}

if (isset($_GET['edit'])) {


$id = $_GET['edit'];
$update= true;

$result = $conn -> query("select * from movies where movieid = $id");


  $row= $result-> fetch_array();
  $moviename = $row['moviename'];
  $seat = $row['seat'];
  $date = $row['date'];
  $timing = $row['timing'];



// echo header("location: http://localhost/PHP/adminpanelmovies.php");
}

if (isset($_POST['update'])) {


$id = $_POST['movieid'];
$moviename = $_POST['moviename'];
$seat = $_POST['seat'];
$date = $_POST['date'];
$timing = $_POST['timing'];

$result = $conn -> query("update movies set moviename ='$moviename',
seat='$seat', date='$date', timing='$timing' where movieid = $id");


  echo header("location: http://localhost/PHP/adminpanelmovies.php");
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




  <div class="admin-section-column justify content center">
    <div class="admin-section-panel admin-section-panel2">
        <div class="admin-panel-section-header">
            <h2>Movies</h2>
            <i class="fas fa-film" style="background-color: #4547cf"></i>
        </div>

        <form action="adminpanelmovies.php" method="POST" autocomplete="off">
            <input type="hidden" name="movieid" value="<?php echo $id; ?>">
            <input placeholder="Movie name" type="text" name="moviename" value="<?php echo $moviename; ?>"required><br>
            <input placeholder="Seats" type="text" name="seat" value="<?php echo $seat; ?>"required><br>
            <input placeholder="Date" type="text" name="date" value="<?php echo $date; ?>"required><br>
            <input placeholder="Timing" type="text" name="timing" value="<?php echo $timing; ?>"required><br>




              <?php if ($update == true):
                ?>
                  <button type="submit"  name="update" class="form-btn">Update</button>

                <?php else: ?>
                  <button type="submit"  name="submit" class="form-btn">Add Movie</button>
              <?php endif; ?>




        </form>
    </div>
  </div>
<!-- </div> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <table class="center" style="width: 900px">
    <thead>
      <tr>
        <th>Movie name</th>
        <th>Seat Available</th>
        <th>Date</th>
        <th>Timing</th>
        <th>Action</th>
</tr>
  </thead>
        <?php while ($row = $result->fetch_assoc()):?>

          <tr>
            <td><?php echo $row['moviename'] ?></td>
              <td><?php echo $row['seat'] ?></td>
                <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['timing'] ?></td>
                <td>
                  <a href="adminpanelmovies.php?delete=<?php echo $row['movieid']; ?>"
                  class="btn btn-info">Delete</a>
                  <a href="adminpanelmovies.php?edit=<?php echo $row['movieid']; ?>"
                  class="btn btn-info">Edit</a>
                </td>
          </tr>
<?php endwhile; ?>




  </table>
  </body>
</html>




    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



  </body>
</html>
