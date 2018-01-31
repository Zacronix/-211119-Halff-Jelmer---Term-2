<?php

 $page = $_SERVER['PHP_SELF'];
 $secpage = "2";
 header("Refresh: $secpage; url=$page");
$min = 999;
$max = 9999;
$code = rand($min, $max) . "\n";
print_r($code);
include 'datalogin.php';
$sql = "INSERT INTO `partycode` (code)
 VALUES ( '$code' )";

   $url = 'game.php';

if ($connect->query($sql) === TRUE) {
        header( "Location: $url" );
    } else {
        echo "Failed";
    }



?>
