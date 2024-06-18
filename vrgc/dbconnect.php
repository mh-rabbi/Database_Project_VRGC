<?php
$servername = "localhost";
$username = "root";
$password_server = "";
$dbname = "vrgc";
$conn = mysqli_connect($servername, $username, $password_server, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    mysqli_select_db($conn, $dbname);
}
?>