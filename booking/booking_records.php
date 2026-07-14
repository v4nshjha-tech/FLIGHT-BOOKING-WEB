<?php
include("../db.php");

$result=mysqli_query($conn,
"SELECT * FROM booking");
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Records</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

<h2>📋 Booking Records</h2>

<table>

<tr>
<th>Booking ID</th>
<th>Passenger ID</th>
<th>Agency ID</th>
<th>Flight ID</th>
<th>Booking Date</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['bid']; ?></td>
<td><?php echo $row['pid']; ?></td>
<td><?php echo $row['aid']; ?></td>
<td><?php echo $row['fid']; ?></td>
<td><?php echo $row['fdate']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>