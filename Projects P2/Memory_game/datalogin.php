<?php
$servername = "127.0.0.1";
$username = "admin";
$password = "tBTx1YSsi4QjcPashAXV58tmh74LVpbthgSnXXn41HITXPgyYzIhRr5GoIgU";
$dbname= "memory_game";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
