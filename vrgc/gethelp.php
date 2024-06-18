<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VRGC - Mental Health Support</title>
  <link rel="stylesheet" type="text/css" href="styleforgethelp.css">
  
</head>

<body>
  <header>
    <div class="headerdiv">
      <a href="http://localhost/vrgc/home.php">
        <p>VRGC</p>
      </a>
      <?php session_start();
      include('header.php') ?>
    </div>
  </header>
  <div class="header">
    <h1 class="main-heading">Get all the Support @ VRGC</h1>
    <p class="sub-heading">Assess and Improve your emotional health with VRGC – the World’s first Virtual and Remote Guidance support</p>
    <button class="button green">Free Mental Health Test</button>
    <button class="button blue"><a href="councel.php" target="_blank">Therapy with Licensed Counselor</a></button>
    <button class="button yellow">Free Chat with Listener</button>
  </div>

  <div class="content">
    <h2>Free Emotional Health Test</h2>
    <p>Do you think you might be suffering from sadness, anxiety, stress, or any other issue? Take our free emotional assessment today and find out! This quick and easy test will help you to understand more about how you’re feeling and give you some insight into what might be going on.</p>
    <button class="test-button">Begin Test</button>
  </div>

</body>

</html>