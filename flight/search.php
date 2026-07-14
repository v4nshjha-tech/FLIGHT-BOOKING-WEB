<?php
include("db.php");

if(isset($_POST['src']))
{
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $fdate=$_POST['fdate'];

$sql = "SELECT * FROM flight
        WHERE src='$src'
        AND dest='$dest'
        AND fdate='$fdate'";

    $result = mysqli_query($conn,$sql);

    if(!$result)
    {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
table th{
    background:red;
    color:white;
}
</style>
    <title>Flight Search Result</title>
</head>

<body>

<div class="search-container">

<div class="flight-search-box">
    <h2>Search Flights</h2>

    <form action="search.php" method="POST">
       <select name="src" required>
    <option value="">Select Source City</option>
    <option value="Bhopal">Bhopal</option>
    <option value="Delhi">Delhi</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Chennai">Chennai</option>
    <option value="Indore">Indore</option>
</select>

<select name="dest" required>
    <option value="">Select Destination City</option>
    <option value="Bhopal">Bhopal</option>
    <option value="Delhi">Delhi</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Chennai">Chennai</option>
    <option value="Indore">Indore</option>
    <option value="New Delhi">New Delhi</option>
</select>
        <input type="date" name="fdate" required>

        <button type="submit">
            Search Flight
        </button>
    </form>
</div>
<div class="search-results">
<h2>Available Flights</h2>
<table>
<tr>
    <th>Flight ID</th>
    <th>Date</th>
    <th>Time</th>
    <th>Source</th>
    <th>Destination</th>
</tr>
<?php

if(isset($result))
{
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
?>
<tr>
    <td><?php echo $row['fid']; ?></td>
    <td><?php echo $row['fdate']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><?php echo $row['src']; ?></td>
    <td><?php echo $row['dest']; ?></td>
</tr>
<?php
        }
    }
    else
    {
      echo "<tr>
<td colspan='5' style='text-align:center;color:red;font-weight:bold;padding:20px;'>
No flights available for selected route and date
</td>
</tr>";
    }
}
?>

</table>
</div>
</body>
</html>