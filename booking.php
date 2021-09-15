
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

$id=0;
$update= false;
$moviename=$seat=$date=$timing='';
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

// for booking
 if (isset($_POST['book'])) {

$moviename = ($_POST['moviename']);
$seat = ($_POST['seat']);
$date = ($_POST['date']);
$timing = ($_POST['timing']);


$_SESSION['message'] = " Booked!!!";
$_SESSION['msg_type'] = "success";

// $userid = $_SESSION['userid'];
$sql ="Insert into book(userid,moviename,seat,date,timing) values('$userid','$moviename','$seat','$date','$timing')";
$conn->query($sql);



echo header("location: http://localhost/PHP/email.php");






}




?>

<!-- for delete -->
<?php


$sq = "SELECT * FROM book";
$conn->query($sq);

if (isset($_GET['delete'])) {
 $id = $_GET['delete'];
 $conn->query("delete from book where id=$id");

 $_SESSION['message'] = " Record deleted!!!";
 $_SESSION['msg_type'] = "danger";
 echo header("location: http://localhost/PHP/booking.php");
}
?>


<!-- For Booking Edit -->
<?php

if (isset($_GET['edit'])) {


$id = $_GET['edit'];
$update= true;

$result = $conn -> query("select * from book where id = $id");


  $row= $result-> fetch_array();
  $moviename = $row['moviename'];
  $seat = $row['seat'];
  $date = $row['date'];
  $timing = $row['timing'];



// echo header("location: http://localhost/PHP/booking.php");
}


 ?>


 <?php
 if (isset($_POST['update'])) {


 $id = $_POST['id'];
 $moviename = $_POST['moviename'];
 $seat = $_POST['seat'];
 $date = $_POST['date'];
 $timing = $_POST['timing'];

 $_SESSION['message3'] = " Updated!!!";
 $_SESSION['msg_type3'] = "success";

 $result = $conn -> query("update book set moviename='$moviename',
 seat='$seat', date='$date', timing='$timing' where id=$id");


   echo header("location: http://localhost/PHP/booking.php");
 }?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!--Custom stylesheet-->
    <!--<link rel="stylesheet" href="style.css">-->

  </head>
  <body>
    <main>
      <div class="container text-center">

<br>

<!-- <table class="table table-dark table-striped" style="width:100%">
      <tr>
        <th>Movie name</th>
        <th>Seat Available</th>
        <th>Date</th>
        <th>Timing</th>
        <th colspan="1">Action</th>
      </tr>
      <tr>
        <td>3idiots</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>


      </tr>

      <tr>
        <td>My name is khan</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Thappad</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Joker</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Goner Girl</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>The pursuit of happiness</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Aynabaji</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Oggatonama</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>

      <tr>
        <td>Bomkesh</td>
        <td><select name="seat" required>
            <option value="" disabled selected>SEAT</option>
            <option value="h1">h1</option>
            <option value="h2">h2</option>
            <option value="h3">h3</option>
            <option value="h4">h4</option>
            <option value="h5">h5</option>
        </select></td>
        <td><select name="date" required>
            <option value="" disabled selected>DATE</option>
            <option value="27 September">27 September</option>
            <option value="28 September">28 September</option>
            <option value="29 September">29 September</option>
            <option value="30 September">30 September</option>
        </select></td></td>
        <td><select name="timing" required>
            <option value="" disabled selected>Timing</option>
            <option value="9:00 am">9:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
        </select></td>

        <td>  <a href="booking.php?book=<?php echo $row['id']; ?>"
          class="btn btn-info">Book</a>
        </td>
      </tr>
    </table> -->


    <br>
    <table class="center" style=" width: 700px">
      <thead>
        <tr>
          <th>Movie name</th>
          <th>Seat Available</th>
          <th>Date</th>
          <th>Timing</th>



          <?php while ($row = $result->fetch_assoc()):?>

            <tr>
              <td><?php echo $row['moviename'] ?></td>
                <td><?php echo $row['seat'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['timing'] ?></td>

            </tr>




            <?php endwhile; ?>


        </tr>
      </thead>
    </table>



         <!-- <div class="d-flex justify-content-center">
           <form class="w-50" action="" method="post">

             <div class="moviename">
               <?php //inputelement("input-group-text bg-warning","<i class='fas fa-video'></i></i>","Moviename","moviename",
               "" ?>
             </div>


             <div class="seat">
               <?php //inputelement("input-group-text bg-info","<i class='fas fa-chair'></i>","Seat","seat",""); ?>
             </div>
             <div class="date">
               <?php //inputelement("input-group-text bg-info","<i class='fas fa-calendar-alt'></i>","Date","date",""); ?>
             </div>

             <div class="timing">
               <?php //inputelement("input-group-text bg-danger","<i class='fas fa-clock'></i></i>","Timing","timing",""); ?>
             </div>

             <div class="Pricing">
               <?php //inputelement("input-group-text bg-danger","<i class='fas fa-money-bill-wave'></i></i>","Pricing","pricing",""); ?>
             </div>
             </div> -->

<br><br>
            <div class="row justify-content-center">
              <form class="" action="booking.php" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form">
                  <input class="bookinginput"type="text" name="moviename" value="<?php echo $moviename; ?>" placeholder="Enter movie name" required>
                  <input class="bookinginput2"type="text" name="seat" value="<?php echo $seat; ?>" placeholder="Enter seat" required>
                  <a href="BookingSeatPlan.php" class="btn btn-info">Seat Plan</a>
                  <input class="bookinginput"type="text" name="date" value="<?php echo $date; ?>" placeholder="Enter date" required>
                  <input class="bookinginput"type="text" name="timing" value="<?php echo $timing; ?>" placeholder="Enter timing" required>


                  <div class="button">

                      <?php button("btn-cancel","btn btn-success","Cancel","cancel","") ?>
                    <?php if ($update == true): ?>
                        <?php button("btn-cancel","btn btn-success","Update","update","") ?>

                      <?php else: ?>
                          <?php button("btn-Signup","btn btn-success","Book","book","") ?>
                    <?php endif; ?>


                  </div>

                </div>
              </form>
            </div>



             <!--<div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>-->




<br><br>
<div class="row justify-content-center">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Movie name</th>
        <th>Seat</th>
        <th>Date</th>
        <th>Timing</th>
        <th>Action</th>
      </tr>
    </thead>

    <?php


    $records = mysqli_query($conn,"select * from book where userid = $userid"); // fetch data from database

    while($data = mysqli_fetch_array($records)){
      ?>
      <tr>
        <td><?php echo $data['moviename'];?></td>
        <td><?php echo $data['seat'];?></td>
        <td><?php echo $data['date'];?></td>
        <td><?php echo $data['timing'];?></td>

        <td>
          <a href="booking.php?delete=<?php echo $data['id']; ?>"
          class="btn btn-info">Delete</a>
          <a href="booking.php?edit=<?php echo $data['id']; ?>"
          class="btn btn-info">Edit</a>
        </td>


        <td>



        </td>

      </tr> <?php } ?>

  </table>
</div>


















        <!--</div>
         /*<div class="d-flex table-data">
            <table class="table table-striped table-dark" style="width:100%">
            <thead class="thead-dark">

            </thead>
            <tbody id="tbody">

                  }
                }

              }


               ?>
            </tbody>
          </table>
        </div>-->
      </div>

    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>

<?php require_once('footer.php') ?>
