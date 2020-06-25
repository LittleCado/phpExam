<?php

$servername = "std-mysql";
$username = "std_947";
$password = "Mypassword";
$db_name = "std_947";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}