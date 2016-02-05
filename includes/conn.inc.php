<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "esports";
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>