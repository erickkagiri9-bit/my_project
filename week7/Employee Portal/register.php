<?php
require_once 'config/database.php';
require_once 'config/session.php';
initializeSession();

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
    <title>Employee Portal - Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="register-page">
    <div class="register-container">
        <div class="register-header">
            <h1>Employee Portal</h1>
            <p>Create your account</p>
        </div>
        
        <form id="registerForm" class="register-form" action="pages/auth.php" method="POST">
            <input type="hidden" name="action" value="register">
            
            <div class="form-row">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="employee_id">Employee ID</label>
                    <input type="text" id="employee_id" name="employee_id" required>
                </div>
                
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" id="department" name="department" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required minlength="6">
                </div>
                
                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" id="password_confirm" name="password_confirm" required minlength="6">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Account</button>
            
            <div class="form-footer">
                <a href="index.php">Already have an account? Login</a>
            </div>
        </form>
        
        <div id="errorMsg" class="error-message"></div>
    </div>
    
    <script src="js/register.js"></script>
</body>
</html>