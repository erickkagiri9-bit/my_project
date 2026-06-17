<?php
require_once '../config/database.php';
require_once '../config/session.php';

// Require login for protected page
requireLogin();

$user = getCurrentUser();

$conn = getDBConnection();
$stmt = $conn->prepare("SELECT COUNT(*) as total FROM users");
$stmt->execute();
$totalEmployees = $stmt->fetch()['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Employee Portal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Employee Portal</div>
        <div class="nav-user">
            <span class="user-name"><?php echo htmlspecialchars($user['full_name']); ?></span>
            <span class="user-role"><?php echo htmlspecialchars($user['role']); ?></span>
            <a href="../logout.php" class="btn btn-logout">Logout</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="page-header">
            <h1>Welcome, <?php echo htmlspecialchars($user['full_name']); ?>!</h1>
            <p>Employee ID: <?php echo htmlspecialchars($user['employee_id']); ?></p>
        </div>
        
        <div class="dashboard-grid">
            <div class="card">
                <div class="card-icon">👤</div>
                <div class="card-content">
                    <h3>My Profile</h3>
                    <p>View and edit your profile</p>
                    <a href="profile.php" class="btn btn-primary">View Profile</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-icon">📅</div>
                <div class="card-content">
                    <h3>Attendance</h3>
                    <p>Check in/out and view history</p>
                    <a href="attendance.php" class="btn btn-primary">View Attendance</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card-icon">📄</div>
                <div class="card-content">
                    <h3>Documents</h3>
                    <p>Access your documents</p>
                    <a href="documents.php" class="btn btn-primary">View Documents</a>
                </div>
            </div>
            
            <?php if ($user['role'] === 'admin'): ?>
            <div class="card">
                <div class="card-icon">⚙️</div>
                <div class="card-content">
                    <h3>Admin Panel</h3>
                    <p>Manage employees (<?php echo $totalEmployees; ?>)</p>
                    <a href="admin.php" class="btn btn-primary">Go to Admin</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="card mt-4">
            <h3>Quick Stats</h3>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-value"><?php echo htmlspecialchars($user['department']); ?></span>
                    <span class="stat-label">Department</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value"><?php echo htmlspecialchars($user['position']); ?></span>
                    <span class="stat-label">Position</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value"><?php echo htmlspecialchars($user['phone']); ?></span>
                    <span class="stat-label">Phone</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value"><?php echo date('M d, Y', strtotime($user['date_registered'])); ?></span>
                    <span class="stat-label">Joined</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>