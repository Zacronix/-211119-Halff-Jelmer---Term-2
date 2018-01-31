<?php
include 'datalogin.php';

$nickname= $_POST['nickname'];
$pwnohash= $_POST['password'];

$firsthash = sha1($pwnohash);
$secondhash = str_replace("a", "g", $firsthash);
$thiredhash = str_replace("e", "h", $secondhash);
$fourthhash = str_replace("i", "t", $thiredhash);
$fifthhash = str_replace("o", "z", $fourthhash);
$sixthhash = str_replace("u", "q", $fifthhash);
$seventhhash = str_replace("f", "p", $sixthhash);
$eighthash = str_replace('3', "j", $seventhhash);
$ninthhash = str_replace('6', "k", $eighthash);
$pw = str_replace('9', "r", $ninthhash);

$sql="SELECT `id` FROM `user` WHERE `nickname`='$nickname' AND `password`='$pw'";
  $result= $connect->query($sql);

  print_r($result);
  $url = 'code.php';
  $url2 = 'index.php';

  if($result -> num_rows> 0) {

    while($row=$result->fetch_assoc()){
      $cookie_name = "BU7wjaP32FAW4CmsD2db";
      $cookie_value = "$nickname";

    if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + 3600, '/');
    }
    if(isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, time() - 3600, '/');
    setcookie($cookie_name, $cookie_value, time() + 3600, '/');
    }
  }
  header( "Location: $url" );
  }else
      header( "Location: $url2" );

?>
