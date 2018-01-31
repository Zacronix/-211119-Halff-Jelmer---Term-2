<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory Game - Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <center><form action="reg.php" method="post">
      <h1>Register</h1>
      <input class="field" type="text" name="nickname" placeholder="Nickname" required>
      <br>
      <input class="field" type="password" name="password" placeholder="Password" required>
      <br>
      <input class="field" type="email" name="email" placeholder="E-mail" required>
      <br>
      <input class="field" type="number" name="age" placeholder="Age" required>
      <br>
      <br>
      <br>
      <button type="submit" name="button">register</button>
      <button onclick="window.location.href='index.php'">back</button>
    </form></center>
    <?php
    $cookie_name = "BU7wjaP32FAW4CmsD2db";
    $url = 'game.php';

    if(isset($_COOKIE[$cookie_name])) {
    		 header( "Location: $url" );
    }
    ?>
  </body>
</html>
