<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Form Submitted</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>

    <div class='container'>
        <h2>Submission Successful</h2>

        <p><strong>Name:</strong> $fullname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>

        <a href='index.php'>Back to Form</a>
    </div>

    </body>
    </html>
    ";
}
else {
    header("Location: index.php");
    exit();
}
?>