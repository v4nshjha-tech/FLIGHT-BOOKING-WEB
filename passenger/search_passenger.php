<?php
include("../db.php");

$result = false;

if(isset($_GET['search']) && $_GET['search']!="")
{
    $search=$_GET['search'];

    $result=mysqli_query($conn,
    "SELECT * FROM passenger
     WHERE pid LIKE '%$search%'
     OR pname LIKE '%$search%'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Passenger</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

    <h2>Search Passenger</h2>

    <form method="GET" class="search-box">

        <input type="text"
               name="search"
               placeholder="Search by ID or Name">

        <button type="submit">
            Search
        </button>

    </form>

    <h2>Passenger Records</h2>
<?php
if($result)
{
?>

<table border="1" width="100%">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>City</th>
</tr>

<?php
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

<?php
}
?>

</div>

</body>
</html>