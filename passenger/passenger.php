<?php
include("db.php");

if(isset($_GET['search']) && $_GET['search']!="")
{
    $search=$_GET['search'];

    $result=mysqli_query($conn,
    "SELECT * FROM passenger
     WHERE pid LIKE '%$search%'
     OR pname LIKE '%$search%'");
}
else
{
    $result=mysqli_query($conn,
    "SELECT * FROM passenger");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Passenger Module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="booking-box">

<h2>Passenger Information</h2>
<form method="GET">
    <input type="text"
           name="search"
           placeholder="Search by ID or Name">

    <button type="submit">
        Search
    </button>
</form>
<form method="POST">

<input type="number"
       name="pid"
       placeholder="Passenger ID"
       required>

<input type="text"
       name="pname"
       placeholder="Passenger Name"
       required>

<input type="number"
       name="age"
       placeholder="Age"
       required>

<select name="pgender" required>
    <option value="">Select Gender</option>
    <option>Male</option>
    <option>Female</option>
</select>

<input type="text"
       name="phone"
       placeholder="Phone Number"
       required>

<input type="text"
       name="pcity"
       placeholder="City"
       required>

<button type="submit" name="save">
    Save Passenger
</button>

</form>

</div>

<div class="search-results">

<h2>Passenger Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>City</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM passenger");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['pid']; ?></td>
    <td><?php echo $row['pname']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['pgender']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['pcity']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>