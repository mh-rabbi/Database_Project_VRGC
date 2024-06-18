<?php
include("dbconnect.php");
session_start();

if(isset($_SESSION['role']))
{
    if($_SESSION['role'] == "Patient")
    {
        header('location: index.php');
    }
}
else {
    header('location: index.php');
}
$sql = "SELECT * FROM booked INNER JOIN users ON booked.user_id = users.userid";
$result = mysqli_query($conn, $sql);
// var_dump($result);
// var_dump($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Counseling Bookings</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .dashboard-header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .dashboard-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .dashboard-table th,
        .dashboard-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .dashboard-table th {
            background-color: #555;
            color: #fff;
        }

        .dashboard-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>

<body>
    <header>
        <div class="headerdiv">
            <a href="http://localhost/vrgc/">
                <p>VRGC</p>
            </a>
            <?php include('header.php') ?>
        </div>
    </header>
    <div class="container">
        <h1 style="text-align: center;">Booked Councelling Sessions</h1>
        <table class="dashboard-table">
            <tr>
               
                <th>Username</th>
                <th>Condition</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>

            </tr>
            <!-- Repeat this block for each booked session -->
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                     <tr>
                        <td>" . $row['username'] . "</td>
                        <td>" . $row['user_condition'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['councelling_date'] . "</td>
                        <td>" . $row['time'] . "</td>

                        </tr>
                        ";
            }
            ?>

            <!-- End of repeat -->
        </table>
    </div>
</body>

</html>