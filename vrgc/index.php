<?php
include("dbconnect.php");
session_start();
if (isset($_POST['submit'])) {
  $e = mysqli_real_escape_string($conn, $_POST['email']);
  $p = md5($_POST['password']);
  $sql = "SELECT * FROM users WHERE email = '$e' AND password = '$p'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($p === $row['password']) {
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['role'] = $row['role'];
      header('location: gethelp.php');
      exit;
    }
  } else {
    echo "<p>Please try again.</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VRGC - Mental Health Support</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
  <div class="bannerdiv">
    <div class="bannerleft">
      <h1>Virtual and Remote Guidance Counselling</h1>
      <h2>In Crisis? Get Counseling Support</h2>
      <p>
        Improve your Emotional well-being with Virtual Counseling and Therapy from licensed psychologist, therapists,
        live peer support, mental health talks, courses, and self-care tools
      </p>
    </div>
    <div class="bannerright">
      <!-- Login Form -->
      <div class="form-container">
        <h2>Log In</h2>
        <form action="" method="post">
          <input type="text" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button type="submit" name="submit">Log In</button>
        </form>
      </div>

      <!-- Register Link -->
      <div class="register">
        <p>Don't have an account? <a href="signup.php">Sign Up Here</a></p>
      </div>
    </div>
  </div>
  <div class="services-header">
    <h2>We've Got You Covered For Almost Every Concern</h2>
  </div>

  <div class="services-container">
    <div class="service-card">
      <img src="img/feeling_lost.png" alt="Feeling Lost">
      <h3>Feeling Lost</h3>
      <p>If you're feeling disconnected from your inner self or feel like life's moments pass by unnoticed due to
        constant preoccupation with the past or future, seek assistance in finding your way.</p>
    </div>
    <div class="service-card">
      <img src="img/feeling_lonely.jpg" alt="Feeling Lonely">
      <h3>Feeling Lonely</h3>
      <p>Experiencing difficulty understanding why relationships tend to dissipate or seem lacking? Reach out for help
        on how to cultivate meaningful connections.</p>
    </div>
    <div class="service-card">
      <img src="img/trauma.jpg" alt="Trauma">
      <h3>Trauma</h3>
      <p>Because of triggering events root deep into your psyche! Connect with seasoned professionals and begin your
        journey of discovery towards bliss.</p>
    </div>
    <div class="service-card">
      <img src="img/burnout.jpg" alt="Burnout">
      <h3>Burnout</h3>
      <p>Feeling overwhelmed? Take a break and reorganize by connecting with professionals who can help you master &
        humbly work-life tensions.</p>
    </div>
    <div class="service-card">
      <img src="img/sadness.jpg" alt="Sadness">
      <h3>Sadness</h3>
      <p>Feeling out of touch with your joyful self? Share your thoughts and concerns with experts who experience an
        uplift in your mood.</p>
    </div>
    <div class="service-card">
      <img src="img/anxiety.jpg" alt="Anxiety">
      <h3>Anxiety</h3>
      <p>Anxious thoughts disturbing you from within? Engage in conversations; interact & express objects and words that
        trigger enjoyment.</p>
    </div>
    <div class="service-card">
      <img src="img/stress.jpg" alt="Stress">
      <h3>Stress</h3>
      <p>Life stresses you too fully enjoying life? Reconnect with life pleasures by finding solutions through the art
        of therapy.</p>
    </div>
    <div class="service-card">
      <img src="img/confusion.jpg" alt="Confusion">
      <h3>Confusion</h3>
      <p>Feelings uncertain about the direction of life? Seek guidance from expert opinions receive prompt answers to
        your questions.</p>
    </div>
  </div>

  <!-- ... other concerns ... -->
  <div class="support-header">
    <h2>Get the Support you need</h2>
  </div>
  <div class="support-section">

    <div class="support-item">
      <img src="img/support1.jpg" alt="Meet people who understand">
      <h3>Meet people who understand</h3>
      <p>Online chat rooms and forums offer ready accessible support catering to a diverse range of concerns including
        illness, stress, relationship issues, LGBTQ+ issues, and more.</p>
    </div>

    <div class="support-item">
      <img src="img/support2.jpg" alt="We're here for teens too">
      <h3>We're here for teens too</h3>
      <p>Are you between the ages of 13 and 17? Our dedicated listeners are here to chat with teenagers; guaranteeing
        confidentiality whenever you seek support.</p>
    </div>

    <div class="support-item">
      <img src="img/support3.jpg" alt="Nurture your mental health">
      <h3>Nurture your mental health</h3>
      <p>Embark on a personal growth journey and uncover fresh coping skills to bolster yourself every day with online
        help. Each step with Psychologist presents carefully curated self-help activities designed to assist in
        enhancing your well-being.</p>
    </div>

  </div>
  <form action="#">
    <button type="submit">Get Help</button>
  </form>

</body>

</html>