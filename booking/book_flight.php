<?php
include("../db.php");

if(isset($_POST['book']))
{
    $pid=$_POST['pid'];
    $aid=$_POST['aid'];
    $fid=$_POST['fid'];
    $fdate=$_POST['fdate'];

    $sql="INSERT INTO booking(pid,aid,fid,fdate)
          VALUES('$pid','$aid','$fid','$fdate')";

   if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('🎫 Flight Booked Successfully');
    window.location='book_flight.php';
    </script>";
    exit();
}
else
{
    echo "<script>
    alert('❌ ".mysqli_error($conn)."');
    </script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Flight</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="booking-box">

    <h2>🎟 Flight Booking Form</h2>

    <form method="POST">

        <label>Passenger ID</label>
        <input type="number"
               name="pid"
               required>

        <label>Agency ID</label>
        <input type="number"
               name="aid"
               required>

        <label>Flight ID</label>
        <input type="number"
               name="fid"
               required>

        <label>Booking Date</label>
        <input type="date"
               name="fdate"
               required>

        <button type="submit"
                name="book">
            Book Flight
        </button>

    </form>

</div>

</body>
</html>