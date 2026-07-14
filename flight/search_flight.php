<?php
include("../db.php");

$result = false;

if(isset($_GET['search']) && trim($_GET['search']) != "")
{
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM flight
            WHERE fid LIKE '%$search%'
            OR src LIKE '%$search%'
            OR dest LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Flight</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="search-results">

<h2>🔍 Search Flight</h2>

<form method="GET" class="search-box">
    <input type="text"
           name="search"
           placeholder="Flight ID / Source / Destination"
           value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">

    <button type="submit">Search</button>
</form>

<?php
if(isset($_GET['search']))
{
    if(trim($_GET['search'])=="")
    {
        echo "<div class='not-found'>
                <div class='not-found-icon'>🔍</div>
                <h2>Empty Search</h2>
                <p>Please enter a Flight ID, Source or Destination.</p>
              </div>";
    }
    elseif(mysqli_num_rows($result)>0)
    {
?>

<table>

<tr>
    <th>Flight ID</th>
    <th>Date</th>
    <th>Time</th>
    <th>Source</th>
    <th>Destination</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['fid']; ?></td>
    <td><?php echo $row['fdate']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><?php echo $row['src']; ?></td>
    <td><?php echo $row['dest']; ?></td>
</tr>

<?php } ?>

</table>

<?php
    }
    else
    {
?>

<div class="not-found">

    <div class="not-found-icon">✈️</div>

    <h2>No Flight Found</h2>

    <p>No flight matched your search.</p>

    <span>Try another Flight ID, Source or Destination.</span>

</div>

<?php
    }
}
?>

</div>

</body>
</html>