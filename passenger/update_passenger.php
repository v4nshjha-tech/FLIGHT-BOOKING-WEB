<?php
include("../db.php");

if(isset($_POST['update']))
{
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $city=$_POST['pcity'];


    if (!preg_match("/^[A-Za-z ]+$/", $pname)) {
    die("<script>alert('Only alphabets are allowed in Passenger Name');history.back();</script>");
}
if (!preg_match("/^[A-Za-z ]+$/", $city)) {
    die("<script>alert('Only alphabets are allowed in City');history.back();</script>");
}

if (!preg_match("/^[0-9]{10}$/", $phone)) {
    die("<script>alert('Phone number must be exactly 10 digits');history.back();</script>");
}

if (!is_numeric($age) || $age < 1 || $age > 120) {
    die("<script>alert('Age must be between 1 and 120');history.back();</script>");
}
    $sql="UPDATE passenger
          SET pname='$pname',
              age='$age',
              phone='$phone',
              pcity='$city'
          WHERE pid='$pid'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Passenger Updated Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Passenger</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="booking-box">

<h2>✏️ Update Passenger</h2>

<form method="POST" id="updateForm">

<input type="number"
name="pid"
placeholder="Passenger ID"
required>

<input type="text"
name="pname"
id="pname"
placeholder="New Name"
required>

<span id="nameError" class="error"></span>

<input type="number"
name="age"
placeholder="New Age"
required>

<input type="text"
name="phone"
id="phone"
maxlength="10"
placeholder="New Phone"
required>

<span id="phoneError" class="error"></span>

<input type="text"
name="pcity"
id="pcity"
placeholder="New City"
required>

<span id="cityError" class="error"></span>

<button type="submit" name="update">
Update Passenger
</button>

</form>

</div>
<script>
const nameInput = document.getElementById("pname");
const phoneInput = document.getElementById("phone");
const cityInput = document.getElementById("pcity");

phoneInput.addEventListener("input", function () {

    let value = this.value;

    if (!/^[0-9]*$/.test(value)) {
        document.getElementById("phoneError").innerHTML = "❌ Only numbers allowed";
        this.classList.add("invalid");
    }
    else if (value.length > 0 && value.length < 10) {
        document.getElementById("phoneError").innerHTML = "❌ Phone must be 10 digits";
        this.classList.add("invalid");
    }
    else {
        document.getElementById("phoneError").innerHTML = "";
        this.classList.remove("invalid");
    }

});
nameInput.addEventListener("input", function () {
    if (!/^[A-Za-z ]*$/.test(this.value)) {
        document.getElementById("nameError").innerHTML = "❌ Only alphabets allowed";
        this.classList.add("invalid");
    } else {
        document.getElementById("nameError").innerHTML = "";
        this.classList.remove("invalid");
    }
});

cityInput.addEventListener("input", function () {

    let value = this.value.trim();

    if (value === "") {
        document.getElementById("cityError").innerHTML = "";
        this.classList.remove("invalid");
        this.classList.remove("valid");
        return;
    }

    if (/^[A-Za-z ]+$/.test(value)) {
        document.getElementById("cityError").innerHTML = "";
        this.classList.remove("invalid");
        this.classList.add("valid");
    } else {
        document.getElementById("cityError").innerHTML = "❌ Only alphabets allowed";
        this.classList.remove("valid");
        this.classList.add("invalid");
    }

});
document.getElementById("updateForm").addEventListener("submit", function(e){

    if(document.querySelector(".invalid")){
        e.preventDefault();
        alert("Please correct all errors before updating.");
    }

});
</script>
</body>
</html>