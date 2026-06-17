<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees(name, email, position, salary)
        VALUES('$name', '$email', '$position', '$salary')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>