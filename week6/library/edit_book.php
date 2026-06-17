<?php

include "config/db.php";

$id = $_GET['id'];

$query = "SELECT * FROM books WHERE id='$id'";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<form action="update_book.php" method="POST">

    <input type="hidden" name="id"
           value="<?= $row['id']; ?>">

    <input type="text" name="book_id"
           value="<?= $row['book_id']; ?>" required>

    <input type="text" name="title"
           value="<?= $row['title']; ?>" required>

    <input type="text" name="author"
           value="<?= $row['author']; ?>" required>

    <input type="text" name="category"
           value="<?= $row['category']; ?>" required>

    <button type="submit">Update</button>

</form>

</div>

</body>
</html>