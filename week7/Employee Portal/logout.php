<?php
require_once 'config/database.php';
require_once 'config/session.php';

initializeSession();

if (isLoggedIn()) {
    $token = $_SESSION['user_token'];
    destroySession($token);
}

// Clear session
$_SESSION = array();

// Clear cookie
if (isset($_COOKIE['autologin'])) {
    setcookie('autologin', '', time() - 3600, '/');
}

// Redirect to login
header('Location: index.php');
exit();
?>