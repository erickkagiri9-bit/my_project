<?php
// Session Management Configuration
define('SESSION_TIMEOUT', 3600); // 1 hour
define('SESSION_NAME', 'employee_portal_session');

// Initialize session
function initializeSession() {
    if (session_status() === PHP_SESSION_NONE) {
        session_name(SESSION_NAME);
        session_start();
    }
}

// Create new session for user
function createSession($userId, $token) {
    $conn = getDBConnection();
    $expiresAt = date('Y-m-d H:i:s', time() + SESSION_TIMEOUT);
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    
    $stmt = $conn->prepare("INSERT INTO sessions (user_id, session_token, expires_at, ip_address) VALUES (?, ?, ?, ?)");
    $stmt->execute([$userId, $token, $expiresAt, $ipAddress]);
}

// Validate session
function validateSession($token) {
    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT s.user_id, s.expires_at, u.username, u.full_name, u.role FROM sessions s JOIN users u ON s.user_id = u.id WHERE s.session_token = ? AND s.expires_at > NOW()");
    $stmt->execute([$token]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Destroy session
function destroySession($token) {
    $conn = getDBConnection();
    $stmt = $conn->prepare("DELETE FROM sessions WHERE session_token = ?");
    $stmt->execute([$token]);
    session_destroy();
}

// Check if user is logged in
function isLoggedIn() {
    initializeSession();
    return isset($_SESSION['user_token']) && validateSession($_SESSION['user_token']);
}

// Get current user data
function getCurrentUser() {
    if (isLoggedIn()) {
        return validateSession($_SESSION['user_token']);
    }
    return null;
}

// Require login for protected pages
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: /employee_portal/index.php');
        exit();
    }
}
?>