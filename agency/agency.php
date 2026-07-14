<?php
include("db.php");

if(isset($_GET['search']) && $_GET['search']!="")
{
    $search=$_GET['search'];

    $result=mysqli_query($conn,
    "SELECT * FROM agency
     WHERE aid LIKE '%$search%'
     OR aname LIKE '%$search%'
     OR acity LIKE '%$search%'");
}
else
{
    $result=mysqli_query($conn,
    "SELECT * FROM agency");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agency Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="booking-box">

    <h2>Agency Information</h2>

    <form method="POST">

        <input type="number"
               name="aid"
               placeholder="Agency ID"
               required>

        <input type="text"
               name="aname"
               placeholder="Agency Name"
               required>

        <input type="text"
               name="acity"
               placeholder="City"
               required>

        <button type="submit" name="save">
            Save Agency
        </button>

    </form>

</div>

<div class="search-results">

    <h2>Search Agency</h2>

    <form method="GET" class="search-box">

        <input type="text"
               name="search"
               placeholder="Search Agency">

        <button type="submit">
            Search
        </button>

    </form>
    <h2>Agency Records</h2>

    <table>

        <tr>
            <th>Agency ID</th>
            <th>Agency Name</th>
            <th>City</th>
        </tr>

        <?php

        $result=mysqli_query($conn,"SELECT * FROM agency");

        while($row=mysqli_fetch_assoc($result))
        {
        ?>

        <tr>
            <td><?php echo $row['aid']; ?></td>
            <td><?php echo $row['aname']; ?></td>
            <td><?php echo $row['acity']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

</div>

</body>
</html>