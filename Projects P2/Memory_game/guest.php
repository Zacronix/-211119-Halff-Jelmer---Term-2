<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory Game - Game</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action="index.php" method="post">
      <button type="submit" name="submit">logout</button>
    </form>
    <?php
    $cookie_name = "BU7wjaP32FAW4CmsD2db";
    $url = 'game.php';

    if(isset($_COOKIE[$cookie_name])) {
    		 header( "Location: $url" );
    }
    ?>
  </body>
</html>
