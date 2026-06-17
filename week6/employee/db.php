<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "employee_db";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>