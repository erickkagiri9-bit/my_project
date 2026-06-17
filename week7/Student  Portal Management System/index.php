<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>

<div class="container">
    <form id="studentForm">
        <input type="hidden" id="student_id">

        <input type="text" id="name" placeholder="Student Name" required>

        <input type="email" id="email" placeholder="Email" required>

        <input type="text" id="course" placeholder="Course" required>

        <button type="submit">Save Student</button>
    </form>

    <h3>Students List</h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody id="studentTable"></tbody>
    </table>
</div>

<script src="script.js"></script>

</body>
</html>