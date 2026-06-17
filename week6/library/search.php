<?php

include "config/db.php";

$search = $_GET['search'];

$query = "SELECT * FROM books
WHERE title LIKE '%$search%'
OR author LIKE '%$search%'
OR category LIKE '%$search%'";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Results</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Search Results</h2>

<a href="index.php">Back</a>

<table>

<tr>
<th>Book ID</th>
<th>Title</th>
<th>Author</th>
<th>Category</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?= $row['book_id']; ?></td>
<td><?= $row['title']; ?></td>
<td><?= $row['author']; ?></td>
<td><?= $row['category']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>