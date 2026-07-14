<?php
include("../db.php");

$result=false;

if(isset($_GET['pid']) && $_GET['pid']!="")
{
    $pid=$_GET['pid'];

    $result=mysqli_query($conn,
    "SELECT * FROM booking
     WHERE pid='$pid'");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking History</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

<h2>📋 Booking History</h2>

<form method="GET" class="search-box">

<input type="number"
name="pid"
placeholder="Enter Passenger ID">

<button type="submit">
Search
</button>

</form>

<?php if($result){ ?>

<table>

<tr>
<th>Booking ID</th>
<th>Passenger ID</th>
<th>Agency ID</th>
<th>Flight ID</th>
<th>Booking Date</th>
</tr>

<?php
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

<?php } ?>

</div>

</body>
</html>