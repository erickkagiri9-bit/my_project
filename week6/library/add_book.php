<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Add New Book</h2>

    <form action="save_book.php" method="POST">

        <input type="text" name="book_id" placeholder="Book ID" required>

        <input type="text" name="title" placeholder="Book Title" required>

        <input type="text" name="author" placeholder="Author" required>

        <input type="text" name="category" placeholder="Category" required>

        <button type="submit">Save Book</button>

    </form>

</div>

</body>
</html>