<?php
include("../db.php");

if(isset($_POST['save']))
{
    $aid = $_POST['aid'];
    $aname = $_POST['aname'];
    $acity = $_POST['acity'];

    $check=mysqli_query($conn,"SELECT * FROM agency WHERE aid='$aid'");

if(mysqli_num_rows($check)>0)
{
    echo "<script>alert('Agency ID Already Exists');</script>";
    exit();
}
    $sql = "INSERT INTO agency(aid, aname, acity)
            VALUES('$aid','$aname','$acity')";

   if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('🏢 Agency Added Successfully');
    window.location='add_agency.php';
    </script>";
    exit();
}
else
{
    echo "<script>
    alert('❌ ".mysqli_error($conn)."');
    </script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Agency</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="booking-box">

    <h2>🏢 Add Agency</h2>

    <form method="POST">

        <input type="number"
               name="aid"
               placeholder="Agency ID"
               required>

        <input type="text"
       name="aname"
       required
       pattern="[A-Za-z ]+"
       title="Only alphabets allowed"
       onkeypress="return /[a-zA-Z ]/.test(event.key)"
               placeholder="Agency Name"
               required>

     <input type="text"
       name="acity"
       required
       pattern="[A-Za-z ]+"
       title="Only alphabets allowed"
       onkeypress="return /[a-zA-Z ]/.test(event.key)"
               placeholder="City"
               required>

        <button type="submit" name="save">
            Save Agency
        </button>

    </form>

</div>

</body>
</html>