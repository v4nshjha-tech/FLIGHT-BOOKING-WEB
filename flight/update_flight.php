<?php
include("../db.php");

if(isset($_POST['update']))
{
    $fid=$_POST['fid'];
    $time=$_POST['time'];

    mysqli_query($conn,
    "UPDATE flight
     SET time='$time'
     WHERE fid='$fid'");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Flight Timing</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="booking-box">

<h2>🕒 Update Flight Timing</h2>

<form method="POST">

<input type="number"
name="fid"
placeholder="Flight ID"
required>

<input type="time"
name="time"
required>

<button type="submit"
name="update">
Update Timing
</button>

</form>

</div>

</body>
</html>