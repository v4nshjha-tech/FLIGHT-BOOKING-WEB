<?php
include("../db.php");

if(isset($_POST['cancel']))
{
    $bid=$_POST['bid'];

    mysqli_query($conn,
    "DELETE FROM booking
     WHERE bid='$bid'");

    echo "<script>alert('Booking Cancelled');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cancel Booking</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="booking-box">

<h2>❌ Cancel Booking</h2>

<form method="POST">

<input type="number"
name="bid"
placeholder="Booking ID"
required>

<button type="submit"
name="cancel">
Cancel Booking
</button>

</form>

</div>

</body>
</html>