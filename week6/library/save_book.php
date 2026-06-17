<?php

include "config/db.php";

$book_id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];

$query = "INSERT INTO books(book_id,title,author,category)
VALUES('$book_id','$title','$author','$category')";

mysqli_query($conn, $query);

header("Location:index.php");
exit();

?>