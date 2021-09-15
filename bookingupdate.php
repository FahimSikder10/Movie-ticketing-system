<!-- <center>
<h3>Update Data</h3>

<form method="POST">


  <input type="text" name="moviename" placeholder="moviename" />
  <input type="text" name="seat" placeholder="seat" />
  <input type="text" name="date" placeholder="date" />
  <input type="text" name="timing" placeholder="timing" />
  <input type="text" name="pricing"placeholder="pricing" />


  <input type="submit" name="edit" value="edit"/>
</form>
</center>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="cinema";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);



    if(isset($_POST['edit']))
    {

      // $_SESSION['message3'] = " Updated!!!";
      // $_SESSION['msg_type3'] = "success";
        $id=isset($_GET['id']) ? $_GET['id'] : '';
        $query = "update booking set moviename='$moviename', seat='$seat',date='$date',timing='$timing',pricing='$pricing', where id='$id'"; // redirects to all records page
        $query_run=mysqli_query($conn,$query);
    }


?> -->
