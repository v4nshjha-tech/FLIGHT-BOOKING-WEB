<?php
include("../db.php");

$result=mysqli_query($conn,"SELECT aid,aname,acity FROM agency");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Locations</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="search-results">

<h2>📍 Agency Locations</h2>

<table>

<tr>
<th>Agency ID</th>
<th>Agency Name</th>
<th>Location</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['aid']; ?></td>
<td><?php echo $row['aname']; ?></td>
<td><?php echo $row['acity']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>