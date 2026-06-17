<?php
require_once '../config/database.php';
require_once '../config/session.php';

initializeSession();

$action = $_POST['action'] ?? '';

if ($action === 'login') {
    handleLogin();
} elseif ($action === 'register') {
    handleRegister();
} else {
    header('Location: ../index.php');
    exit();
}

function handleLogin() {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);
    
    if (empty($username) || empty($password)) {
        showError('Username and password are required');
        return;
    }
    
    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND is_active = 1");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        showError('Invalid username or password');
        return;
    }
    
    // Check password (using SHA2 for database, but you can use password_verify for better security)
    $hashedPassword = hash('sha256', $password);
    
    if ($user['password'] !== $hashedPassword) {
        showError('Invalid username or password');
        return;
    }
    
    // Create session token
    $sessionToken = bin2hex(random_bytes(32));
    
    // Create session in database
    createSession($user['id'], $sessionToken);
    
    // Set session
    $_SESSION['user_token'] = $sessionToken;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['full_name'] = $user['full_name'];
    $_SESSION['role'] = $user['role'];
    
    // Update last login
    $stmt = $conn->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
    $stmt->execute([$user['id']]);
    
    // Set cookie if remember is checked
    if ($remember) {
        setcookie('autologin', $sessionToken, time() + (86400 * 30), '/'); // 30 days
    }
    
    // Redirect to dashboard
    header('Location: dashboard.php');
    exit();
}

function handleRegister() {
    $fullName = trim($_POST['full_name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];
    $employeeId = trim($_POST['employee_id']);
    $department = trim($_POST['department']);
    $position = trim($_POST['position']);
    $phone = trim($_POST['phone']);
    
    // Validation
    if (empty($fullName) || empty($username) || empty($email) || empty($password)) {
        showError('Please fill in all required fields');
        return;
    }
    
    if ($password !== $passwordConfirm) {
        showError('Passwords do not match');
        return;
    }
    
    if (strlen($password) < 6) {
        showError('Password must be at least 6 characters');
        return;
    }
    
    $conn = getDBConnection();
    
    // Check if username or email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    if ($stmt->fetch()) {
        showError('Username or email already exists');
        return;
    }
    
    // Check if employee ID exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE employee_id = ?");
    $stmt->execute([$employeeId]);
    if ($stmt->fetch()) {
        showError('Employee ID already exists');
        return;
    }
    
    // Hash password
    $hashedPassword = hash('sha256', $password);
    
    // Insert user
    $stmt = $conn->prepare("
        INSERT INTO users (username, email, password, full_name, employee_id, department, position, phone) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");
    
    try {
        $stmt->execute([$username, $email, $hashedPassword, $fullName, $employeeId, $department, $position, $phone]);
        $userId = $conn->lastInsertId();
        
        // Auto-login after registration
        $sessionToken = bin2hex(random_bytes(32));
        createSession($userId, $sessionToken);
        
        $_SESSION['user_token'] = $sessionToken;
        $_SESSION['user_id'] = $userId;
        $_SESSION['username'] = $username;
        $_SESSION['full_name'] = $fullName;
        $_SESSION['role'] = 'employee';
        
        header('Location: dashboard.php');
        exit();
        
    } catch (PDOException $e) {
        showError('Registration failed: ' . $e->getMessage());
        return;
    }
}

function showError($message) {
    echo json_encode(['success' => false, 'message' => $message]);
    exit();
}
?>