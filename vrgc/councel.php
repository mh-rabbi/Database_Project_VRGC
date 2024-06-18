<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Your Counseling Session</title>
  <link rel="stylesheet" type="text/css" href="styleforcouncel.css">

</head>

<body>

  <h1>Book Your Counseling Session</h1>

  <?php
  include("dbconnect.php");
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming sending the data to an email address
    $condition = $_POST['condition'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $userId = $_SESSION['userid'];

    $sql = "insert into booked(user_condition, user_id, councelling_date, time) values('$condition','$userId','$date','$time')";

    $result = mysqli_query($conn, $sql);
    // var_dump(($result));
    // var_dump(($conn));
    if ($result) {
      // header('location: gethelp.php'); 
      echo "<p>Thank you. Your appointment for $condition counseling on $date at $time has been booked.</p>";
    }
    // Here I would typically send the data to an email or save it to a database
    // For now, we'll just display a confirmation message
  }
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="condition">Select your condition:</label>
    <select id="condition" name="condition" required>
      <option value="">Select your condition</option>
      <option value="stress">Stress</option>
      <option value="loneliness">Feeling Lonely</option>
      <option value="anxiety">Anxiety</option>
      <option value="depression">Depression</option>
      <option value="addiction">Addiction</option>
      <option value="anger">Anger Management</option>
      <option value="self-esteem">Low Self-Esteem</option>
      <option value="relationship-issues">Relationship Issues</option>
      <option value="eating-disorders">Eating Disorders</option>
      <option value="sleep-disorders">Sleep Disorders</option>
      <option value="obsessive-compulsive-disorder">Obsessive-Compulsive Disorder</option>
      <option value="post-traumatic-stress-disorder">Post-Traumatic Stress Disorder</option>
      <option value="bipolar-disorder">Bipolar Disorder</option>
      <option value="schizophrenia">Schizophrenia</option>
    </select>

    <label for="time">Preferred Time:</label>
    <input type="time" id="time" name="time" required>
    <label for="date">Preferred Date:</label>
    <input type="date" id="date" name="date" required>

    <input type="submit" value="Book Appointment">
  </form>

</body>

</html>