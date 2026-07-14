<?php
include("../db.php");

if(isset($_POST['save']))
{
    $fid   = $_POST['fid'];
    $fdate = $_POST['fdate'];
    $time  = $_POST['time'];
    $src   = $_POST['src'];
    $dest  = $_POST['dest'];


    $check=mysqli_query($conn,"SELECT * FROM flight WHERE fid='$fid'");

if(mysqli_num_rows($check)>0)
{
    echo "<script>alert('Flight ID Already Exists');</script>";
    exit();
}


    $sql = "INSERT INTO flight(fid,fdate,time,src,dest)
            VALUES('$fid','$fdate','$time','$src','$dest')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('✈ Flight Added Successfully!');
        window.location='add_flight.php';
        </script>";
        exit();
    }
    else
    {
        echo "<script>
        alert('Error: ".mysqli_error($conn)."');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Flight</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="booking-box">

<h2>✈ Add Flight</h2>

<form method="POST">

<input type="number" name="fid" placeholder="Flight ID" required>

<input type="date" name="fdate" required>

<input type="time" name="time" required>

<input type="text"
       name="src"
       placeholder="Enter Source"
       required
       pattern="[A-Za-z ]+"
       title="Only alphabets allowed"
       onkeypress="return /[a-zA-Z ]/.test(event.key)">

<input type="text"
       name="dest"
       placeholder="Enter Destination"
       required
       pattern="[A-Za-z ]+"
       title="Only alphabets allowed"
       onkeypress="return /[a-zA-Z ]/.test(event.key)">

<button type="submit" name="save">
Save Flight
</button>

</form>

</div>

</body>
</html>