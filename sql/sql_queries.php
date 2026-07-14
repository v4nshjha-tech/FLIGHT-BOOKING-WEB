<?php
include("../db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>SQL Query Runner</title>
    <link rel="stylesheet" href="../style.css">

    <style>

        .sql-container{
            width:90%;
            margin:30px auto;
            background:#fff;
            padding:30px;
            border-radius:12px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        .sql-container h1{
            text-align:center;
            color:#0d6efd;
            margin-bottom:25px;
        }

        .sql-form{
            display:flex;
            gap:15px;
            margin-bottom:30px;
        }

        .sql-form select{
            flex:1;
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
        }

        .sql-form button{
            padding:12px 25px;
            background:#0d6efd;
            color:#fff;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:16px;
        }

        .sql-form button:hover{
            background:#084298;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th{
            background:#0d6efd;
            color:#fff;
            padding:12px;
        }

        table td{
            padding:10px;
            border:1px solid #ddd;
            text-align:center;
        }

        table tr:nth-child(even){
            background:#f8f9fa;
        }

        table tr:hover{
            background:#eef5ff;
        }

    </style>

</head>

<body>

<div class="sql-container">

<h1>📄 SQL Query </h1>

<form method="POST" class="sql-form">

<select name="query" required>

<option value="">-- Select SQL Query --</option>

<option value="1">1. Flights to New Delhi</option>
<option value="2">2. Chennai to New Delhi Flights</option>
<option value="3">3. Flight Number of Passenger 123</option>
<option value="4">4. Passengers having Bookings</option>
<option value="5">5. Passengers without Bookings</option>
<option value="6">6. Agencies in Passenger City</option>
<option value="7">7. Flights on Both Dates</option>
<option value="8">8. Flights on Either Date</option>
<option value="9">9. Agencies with No Booking for Passenger</option>
<option value="10">10. Male Passengers with Jet Agency</option>
<option value="11">11. Passengers with Multiple Bookings</option>
<option value="12">12. Agency with Maximum Bookings</option>
<option value="13">13. Passengers using Different City Agencies</option>
<option value="14">14. Flights with More than 5 Bookings</option>
<option value="15">15. Passenger with Earliest Flight</option>
<option value="16">16. Passengers with Multiple Destinations</option>
<option value="17">17. Agencies Never Handled Booking</option>
<option value="18">18. Flights without Booking</option>
<option value="19">19. Passengers Booked All Flights</option>
<option value="20">20. Most Frequent Destination</option>
<option value="21">21. Consecutive Flight Bookings</option>
<option value="22">22. Total Passengers from Each Source</option>
<option value="23">23. Agencies Booking Male & Female</option>
<option value="24">24. Flight with Highest Bookings</option>

</select>

<button type="submit" name="run">
▶ Run Query
</button>

</form>

<?php

if(isset($_POST['run']))
{

$query=$_POST['query'];

echo "<h2>Selected Query : Query ".$query."</h2>";

echo "<hr>";

switch($query)
{
    case 1:
        $sql = "SELECT * FROM flight WHERE dest='New Delhi'";
        break;

    case 2:
        $sql = "SELECT * FROM flight WHERE src='Chennai' AND dest='New Delhi'";
        break;

    case 3:
        $sql = "SELECT fid FROM booking WHERE pid='123'";
        break;

    case 4:
        $sql = "SELECT DISTINCT p.* FROM passenger p
                JOIN booking b ON p.pid=b.pid";
        break;

    case 5:
        $sql = "SELECT * FROM passenger
                WHERE pid NOT IN (SELECT pid FROM booking)";
        break;

    case 6:
        $sql = "SELECT * FROM agency
                WHERE acity=(SELECT pcity FROM passenger WHERE pid='123')";
        break;

    case 7:
        $sql = "SELECT * FROM flight
                WHERE fdate='2020-12-01' AND time='16:00'";
        break;

    case 8:
        $sql = "SELECT * FROM flight
                WHERE fdate IN('2020-12-01','2020-12-02')
                AND time='16:00'";
        break;
        case 9:
    $sql = "SELECT * FROM agency
            WHERE aid NOT IN
            (SELECT aid FROM booking WHERE pid='123')";
    break;

case 10:
    $sql = "SELECT DISTINCT p.*
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            JOIN agency a ON b.aid=a.aid
            WHERE p.pgender='Male'
            AND a.aname='Jet'";
    break;

case 11:
    $sql = "SELECT p.pid,p.pname,COUNT(*) AS TotalBookings
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            GROUP BY p.pid,p.pname
            HAVING COUNT(*)>1";
    break;

case 12:
    $sql = "SELECT a.aid,a.aname,COUNT(*) AS TotalBookings
            FROM agency a
            JOIN booking b ON a.aid=b.aid
            GROUP BY a.aid,a.aname
            ORDER BY TotalBookings DESC
            LIMIT 1";
    break;

case 13:
    $sql = "SELECT DISTINCT p.*
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            JOIN agency a ON b.aid=a.aid
            WHERE p.pcity<>a.acity";
    break;

case 14:
    $sql = "SELECT f.fid,f.src,f.dest,COUNT(*) AS TotalPassengers
            FROM flight f
            JOIN booking b ON f.fid=b.fid
            GROUP BY f.fid,f.src,f.dest
            HAVING COUNT(*)>5";
    break;

case 15:
    $sql = "SELECT p.*
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            ORDER BY b.fdate ASC
            LIMIT 1";
    break;

case 16:
    $sql = "SELECT p.pid,p.pname
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            JOIN flight f ON b.fid=f.fid
            GROUP BY p.pid,p.pname
            HAVING COUNT(DISTINCT f.dest)>1";
    break;
    case 17:
    $sql = "SELECT *
            FROM agency
            WHERE aid NOT IN
            (SELECT aid FROM booking)";
    break;

case 18:
    $sql = "SELECT *
            FROM flight
            WHERE fid NOT IN
            (SELECT fid FROM booking)";
    break;

case 19:
    $sql = "SELECT p.pid,p.pname
            FROM passenger p
            JOIN booking b ON p.pid=b.pid
            GROUP BY p.pid,p.pname
            HAVING COUNT(DISTINCT b.fid)=
            (SELECT COUNT(*) FROM flight)";
    break;

case 20:
    $sql = "SELECT f.dest,
            COUNT(*) AS TotalBookings
            FROM flight f
            JOIN booking b ON f.fid=b.fid
            GROUP BY f.dest
            ORDER BY TotalBookings DESC
            LIMIT 1";
    break;

case 21:
    $sql = "SELECT DISTINCT p.*
            FROM passenger p
            JOIN booking b1 ON p.pid=b1.pid
            JOIN booking b2 ON p.pid=b2.pid
            WHERE DATEDIFF(b2.fdate,b1.fdate)=1";
    break;

case 22:
    $sql = "SELECT f.src,
            COUNT(DISTINCT b.pid) AS TotalPassengers
            FROM flight f
            JOIN booking b ON f.fid=b.fid
            GROUP BY f.src";
    break;

case 23:
    $sql = "SELECT a.aid,a.aname
            FROM agency a
            JOIN booking b ON a.aid=b.aid
            JOIN passenger p ON b.pid=p.pid
            GROUP BY a.aid,a.aname
            HAVING COUNT(DISTINCT p.pgender)=2";
    break;

case 24:
    $sql = "SELECT f.fid,
            f.src,
            f.dest,
            COUNT(*) AS TotalBookings
            FROM flight f
            JOIN booking b ON f.fid=b.fid
            GROUP BY f.fid,f.src,f.dest
            ORDER BY TotalBookings DESC
            LIMIT 1";
    break;

    default:
        $sql = "";
}
if($sql != "")
{
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table>";

            echo "<tr>";

            while($field = mysqli_fetch_field($result))
            {
                echo "<th>".$field->name."</th>";
            }

            echo "</tr>";

            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";

                foreach($row as $value)
                {
                    echo "<td>".$value."</td>";
                }

                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "<h3 style='color:red;text-align:center;'>No Records Found</h3>";
        }
    }
    else
    {
        echo "<h3 style='color:red;'>".mysqli_error($conn)."</h3>";
    }
}

}

?>

</div>

</body>

</html>