<?php
include("../db.php");

$result = false;

if(isset($_GET['search']) && $_GET['search']!="")
{
    $search = $_GET['search'];

    $result = mysqli_query($conn,
    "SELECT * FROM agency
     WHERE aid LIKE '%$search%'
     OR aname LIKE '%$search%'
     OR acity LIKE '%$search%'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Agency</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

    <h2>🔍 Search Agency</h2>

    <form method="GET" class="search-box">

        <input type="text"
               name="search"
               placeholder="Search by ID, Name or City">

        <button type="submit">
            Search
        </button>

    </form>

    <?php if($result){ ?>

    <h2>Search Results</h2>

    <table border="1" width="100%">

        <tr>
            <th>Agency ID</th>
            <th>Agency Name</th>
            <th>City</th>
        </tr>

        <?php
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

    <?php } ?>

</div>

</body>
</html>