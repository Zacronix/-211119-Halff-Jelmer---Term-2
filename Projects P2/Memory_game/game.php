<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memory Game - Game</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1><?php
			echo 'You are logged in as: ' . htmlspecialchars($_COOKIE["BU7wjaP32FAW4CmsD2db"]);
			?></h1>
    <form action="#" method="post">
      <button type="submit" name="logout">logout</button>
    </form>
      <center>
        <h1>Gold Game</h1>
        <button onclick="window.location.href='gameG-16.php'">16 Cards</button>
        <button onclick="window.location.href='gameG-32.php'">32 Cards</button>
        <br>
        <br>
        <h1>18+ Game</h1>
        <button onclick="window.location.href='game18-16.php'">16 Cards</button>
        <button onclick="window.location.href='game18-32.php'">32 Cards</button>
      </center>
      <?php
			$cookie_name = "BU7wjaP32FAW4CmsD2db";
			$url = 'index.php';

			if(!isset($_COOKIE[$cookie_name])) {
			     header( "Location: $url" );
			}

      if (isset($_POST['logout'])) {
			     setcookie($cookie_name, '', 1, '/');
			   header( "Location: $url" );
		  }

			?>

  </body>
</html>
