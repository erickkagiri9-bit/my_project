<?php
require_once 'config/database.php';
require_once 'config/session.php';
initializeSession();

// If already logged in, redirect to dashboard
if (isLoggedIn()) {
    header('Location: pages/dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal - Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-header">
            <h1>Employee Portal</h1>
            <p>Login to access your dashboard</p>
        </div>
        
        <form id="loginForm" class="login-form" action="pages/auth.php" method="POST">
            <input type="hidden" name="action" value="login">
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="username">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            
            <div class="form-options">
                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    Keep me signed in
                </label>
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
            
            <div class="form-footer">
                <a href="register.php">Create an account</a>
            </div>
        </form>
        
        <div id="errorMsg" class="error-message"></div>
    </div>
    
    <script src="js/login.js"></script>
</body>
</html>