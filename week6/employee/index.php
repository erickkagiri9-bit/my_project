<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM employees");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee System</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #333; color: white; }
        a { text-decoration: none; color: red; }
        .form-box { margin-bottom: 20px; }
        input { padding: 8px; margin: 5px; }
    </style>
</head>
<body>

<h2>Employee Record System</h2>

<div class="form-box">
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="position" placeholder="Position" required>
        <input type="number" name="salary" placeholder="Salary" required>
        <button type="submit">Add Employee</button>
    </form>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['position'] ?></td>
        <td><?= $row['salary'] ?></td>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>