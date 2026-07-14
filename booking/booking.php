<?php
include("db.php");


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
        echo "<script>alert('Booking Successful');</script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
if(isset($_POST['cancel']))
{
    $bid=$_POST['cancel_bid'];

    mysqli_query($conn,
    "DELETE FROM booking WHERE bid='$bid'");

    echo "<script>alert('Booking Cancelled Successfully');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <head>
        <link rel="stylesheet" href="style.css">
    <title>Flight Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>

<body>

<div class="booking-box">

<h2>Flight Booking Form</h2>

<form method="POST">

    <label>Passenger ID</label>
    <input type="number" name="pid" required>

    <label>Agency ID</label>
    <input type="number" name="aid" required>

    <label>Flight ID</label>
    <input type="number" name="fid" required>

    <label>Booking Date</label>
    <input type="date" name="fdate" required>

    <button type="submit" name="book">
        Book Flight
    </button>

</form>

</div>
<div class="booking-box">

<h2>Cancel Booking</h2>

<form method="POST">

<input type="number"
       name="cancel_bid"
       placeholder="Enter Booking ID">

<button type="submit" name="cancel">
    Cancel Booking
</button>

</form>

</div>
<div class="search-results">

<h2>Booking Records</h2>

<table>

<tr>
    <th>Booking ID</th>
    <th>Passenger ID</th>
    <th>Agency ID</th>
    <th>Flight ID</th>
    <th>Booking Date</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM booking");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['bid']; ?></td>
    <td><?php echo $row['pid']; ?></td>
    <td><?php echo $row['aid']; ?></td>
    <td><?php echo $row['fid']; ?></td>
    <td><?php echo $row['fdate']; ?></td>
</tr>

<?php
}
?>

</table>

</div>
<?php
$result=mysqli_query($conn,"SELECT COUNT(*) AS total FROM booking");



$count=mysqli_fetch_assoc($result);


?>
<?php
$count=mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM booking"));
?>

<h2>Booking Report</h2>

<div class="report-card">
    🎫 Total Bookings :
    <?php echo $count['total']; ?>
</div>


</body>
</html>
