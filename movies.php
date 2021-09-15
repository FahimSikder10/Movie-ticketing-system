<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
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


      $records = mysqli_query($conn,"select * from movies"); // fetch data from database

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
  </body>
</html>
