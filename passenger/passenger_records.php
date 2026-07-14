<?php
include("../db.php");

$sql = "SELECT * FROM passenger ORDER BY pid ASC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>Passenger Records</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="container">

<h1>👤 Passenger Records</h1>

<table>

<tr>

<th>PID</th>
<th>Name</th>
<th>Gender</th>
<th>City</th>
<th>Age</th>
<th>Phone</th>

</tr>

<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['pid']; ?></td>

<td><?php echo $row['pname']; ?></td>

<td><?php echo $row['pgender']; ?></td>

<td><?php echo $row['pcity']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['phone']; ?></td>

</tr>

<?php

}

}

else
{

echo "<tr>
<td colspan='6'>No Passenger Records Found</td>
</tr>";

}

?>

</table>

</div>

</body>
</html>