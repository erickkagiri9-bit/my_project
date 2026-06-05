<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>

    <form action="process.php" method="POST">

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>