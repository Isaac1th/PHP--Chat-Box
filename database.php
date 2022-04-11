<?php

// Connect to MySQL
$host_name = "localhost";
$db_name = "";
$user_name = "root";
$password = "";

$conn = mysqli_connect($host_name, $user_name, $password, $db_name);

// Test Connection
if (mysqli_connect_errno()){
    echo 'Failed to connecet to MySQL: ' . mysqli_connect_error();
}
