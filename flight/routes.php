<?php
include("../db.php");

$result=mysqli_query($conn,
"SELECT * FROM flight");
?>

<!DOCTYPE html>
<html>
<head>
<title>Flight Routes</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

<h2>🗺 Flight Routes</h2>

<table>

<tr>
<th>Flight ID</th>
<th>Source</th>
<th>Destination</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['fid']; ?></td>
<td><?php echo $row['src']; ?></td>
<td><?php echo $row['dest']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>