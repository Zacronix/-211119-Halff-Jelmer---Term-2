<?php

include 'dbh.php';

$a_text = $_POST['a_text'];
$a_title = $_POST['a_title'];
$todayRP = getdate();
$d = $todayRP['mday'];
$m = $todayRP['mon'];
$y = $todayRP['year'];
$h = $todayRP['hours'];
$min = $todayRP['minutes'];
$sec = $todayRP['seconds'];

$a_date = "$y-$m-$d:$h-$min-$sec";

$url = 'upload2.php';


$sql = "INSERT INTO `article` (`a_date` , `a_text` , `a_title`) VALUES ('$a_date' , '$a_text' , '$a_title')";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
               header("location: $url");
} else {
    echo "Failed";
               header("location: $url");

}

?>
