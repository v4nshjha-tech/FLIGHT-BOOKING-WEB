<?php
include("../db.php");

if(isset($_POST['save']))
{
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $age=$_POST['age'];
    $gender=$_POST['pgender'];
    $phone=$_POST['phone'];
    $city=$_POST['pcity'];

if (!preg_match("/^[A-Za-z ]+$/", $pname)) {
    die("<script>alert('Only alphabets are allowed in Passenger Name');history.back();</script>");
}

if (!preg_match("/^[A-Za-z ]+$/", $pcity)) {
    die("<script>alert('Only alphabets are allowed in City');history.back();</script>");
}

if (!preg_match("/^[0-9]{10}$/", $phone)) {
    die("<script>alert('Phone number must contain exactly 10 digits');history.back();</script>");
}

if (!is_numeric($pid)) {
    die("<script>alert('Passenger ID must contain numbers only');history.back();</script>");
}

if ($age < 1 || $age > 120) {
    die("<script>alert('Age must be between 1 and 120');history.back();</script>");
}
    
$check=mysqli_query($conn,"SELECT * FROM passenger WHERE pid='$pid'");

if(mysqli_num_rows($check)>0)
{
    echo "<script>alert('Passenger ID Already Exists');</script>";
    exit();
}

    $sql="INSERT INTO passenger(pid,pname,pgender,pcity,age,phone)
VALUES('$pid','$pname','$gender','$city','$age','$phone')";

   if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('✅ Passenger Added Successfully');
    window.location='add_passenger.php';
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
    <title>Add Passenger</title>
   <link rel="stylesheet" href="../style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
<body>

<div class="booking-box">

<h2>Add Passenger</h2>

<form method="POST">

<input type="number" name="pid" placeholder="Passenger ID" required>

<input type="text"
name="pname"
id="pname"
placeholder=" Enter Passenger Name"
required>

<span id="nameError" class="error"></span>

<input type="number"
name="age"
id="age"
min="1"
max="120"
placeholder="Age"
required>

<span id="ageError" class="error"></span>

<select name="pgender" required>
    <option value="">Select Gender</option>
    <option>Male</option>
    <option>Female</option>
</select>

<input
type="tel"
id="phone"
name="phone"
maxlength="10"
placeholder="Enter Mobile Number"
required
pattern="[0-9]{10}"
inputmode="numeric"
autocomplete="off">

<span id="phoneError" class="error"></span>

<input type="text"
name="pcity"
id="pcity"
placeholder=" Enter City"
required>

<span id="cityError" class="error"></span>

<button type="submit" name="save">
    Save Passenger
</button>

</form>

</div>
<script>

// Name
document.getElementById("pname").addEventListener("input",function(){

let value=this.value;

if(!/^[A-Za-z ]*$/.test(value))
{
document.getElementById("nameError").innerHTML="❌ Only alphabets allowed";
this.classList.add("invalid");
}
else
{
document.getElementById("nameError").innerHTML="";
this.classList.remove("invalid");
}

});

// City
document.getElementById("pcity").addEventListener("input",function(){

let value=this.value;

if(!/^[A-Za-z ]*$/.test(value))
{
document.getElementById("cityError").innerHTML="❌ Only alphabets allowed";
this.classList.add("invalid");
}
else
{
document.getElementById("cityError").innerHTML="";
this.classList.remove("invalid");
}

});

// Phone


const input = document.querySelector("#phone");

const iti = window.intlTelInput(input, {

    initialCountry: "in",

    preferredCountries: ["in","us","gb","ae"],

    separateDialCode: true,

    strictMode: true,

    utilsScript:"https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"

});


const phone = document.getElementById("phone");

phone.addEventListener("input", function(){

    // Sirf numbers rakho
    this.value = this.value.replace(/\D/g,'');

    // Maximum 10 digits
    if(this.value.length > 10){
        this.value = this.value.slice(0,10);
    }

});





// Passenger ID
document.getElementById("pid").addEventListener("input",function(){

let value=this.value;

if(!/^[0-9]*$/.test(value))
{
document.getElementById("pidError").innerHTML="❌ Numbers only";
this.classList.add("invalid");
}
else
{
document.getElementById("pidError").innerHTML="";
this.classList.remove("invalid");
}

});

// Age
document.getElementById("age").addEventListener("input",function(){

let value=parseInt(this.value);

if(value<1 || value>120)
{
document.getElementById("ageError").innerHTML="❌ Age must be between 1 and 120";
this.classList.add("invalid");
}
else
{
document.getElementById("ageError").innerHTML="";
this.classList.remove("invalid");
}

});

</script>

</body>
</html>