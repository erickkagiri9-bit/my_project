<?php

include "config/db.php";

$id = $_POST['id'];
$book_id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];

$query = "UPDATE books SET

book_id='$book_id',
title='$title',
author='$author',
category='$category'

WHERE id='$id'";

mysqli_query($conn,$query);

header("Location:index.php");
exit();

?>