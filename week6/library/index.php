<?php
include "config/db.php";

$query = "SELECT * FROM books ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Library Management System</h1>

    <a href="add_book.php" class="btn">Add Book</a>

    <form action="search.php" method="GET">
        <input type="text" name="search" placeholder="Search Book">
        <button type="submit">Search</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['book_id']; ?></td>
            <td><?= $row['title']; ?></td>
            <td><?= $row['author']; ?></td>
            <td><?= $row['category']; ?></td>
            <td>
                <a href="edit_book.php?id=<?= $row['id']; ?>">Edit</a>
                |
                <a href="delete_book.php?id=<?= $row['id']; ?>"
                   onclick="return confirm('Delete Book?')">
                   Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>