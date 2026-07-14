<?php
include("../db.php");

$count=mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM booking"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Reports</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

<h2>📊 Booking Report</h2>

<div class="report-card">
🎫 Total Bookings :
<?php echo $count['total']; ?>
</div>

</div>

</body>
</html>