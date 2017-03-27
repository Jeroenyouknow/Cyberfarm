<?php

$servername = "localhost";
$username = "0925251";
$dbpass = "xeinahzu";
$dbname = "0925251";

$err_level = error_reporting(0);
$db = mysqli_connect($servername, $username, $dbpass, $dbname);
if (!$db) {
    echo("Connection failed");
}
error_reporting($err_level);