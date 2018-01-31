<?php
include 'datalogin.php';

  $nickname= $_POST['nickname'];
  $pwnohash= $_POST['password'];
  $email= $_POST['email'];
  $age= $_POST['age'];
  
  if($nickname == "" || $pwnohash == "" || $email == "" || $age == ""){
    $url = 'register.php';
    header( "Location: $url" );
  }else{

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


$sql = "INSERT INTO `user` (nickname, password, email, age)
 VALUES ( '$nickname' , '$pw' , '$email' , '$age')";

 $url = 'index.php';
 $url2 = 'register.php';

if ($connect->query($sql) === TRUE) {
  print_r($result);

      header( "Location: $url" );
	} else {
		  header( "Location: $url2" );
	}
 }
?>
