<?php
require_once ('dbconnect.php');
if (isset($_POST['submit'])) {
    $u = mysqli_real_escape_string($conn, $_POST['username']);
    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $p = md5($_POST['password']);
    $phn = $_POST['phone'];
    $sql = "select * form users where email = '$e' && password = '$p'";
    $result = mysqli_query($conn, $sql);
    $sql1 = "insert into users(username, email, password, phone) values('$u','$e','$p','$phn')";
    mysqli_query($conn, $sql1);
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container">
        <!-- Sign Up Form -->
        <div class="form-container">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="tel" name="phone" placeholder="Phone Number" required>
                <button type="submit" name="submit">Sign Up</button>
            </form>

            <!-- Register Link -->
        <div class="register">
            <p>Already have an account? <a href="index.php">Log In here</a></p>
        </div>
        </div>
</body>

</html>