<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory Game - Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <center><form class="align" action="login.php" method="post">
      <h1>Login</h1>
      <input class="field" type="text" name="nickname" placeholder="Nickname" required>
      <br>
      <input class="field" type="password" name="password" placeholder="Password" required>
      <br>
      <br>
      <button type="submit" name="button">login</button>
      <button onclick="window.location.href='register.php'">register</button>
    </form></center>
    <br>
    <br>
    <center><h1>Or play as guest</h1></center>
    <center><form action="guest.php" method="post">
      <input class="field" type="text" name="guestnickname" placeholder="Nickname" required>
      <br>
      <br>
      <button class="field-button"type="submit" name="button">Play</button>
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
