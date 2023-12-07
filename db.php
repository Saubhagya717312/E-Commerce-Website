<?php

require "config/constants.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = "guestbook";

// Create connection
$con = mysqli_connect($servername, $username , $password,$database);

// echo var_dump($result);
// Check connection
if (!$con) {
    echo "not done";
    die("Connection failed: " . mysqli_connect_error());
}


?>