<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "student_system";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn) {
    echo "<h2>Database Connected Successfully!</h2>";
} else {
    echo "Connection Failed: " . mysqli_connect_error();
}

?>