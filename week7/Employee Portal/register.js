// Register Form Validation
document.getElementById('registerForm').addEventListener('submit', function(e) {
    const fullName = document.getElementById('full_name').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordConfirm = document.getElementById('password_confirm').value;
    const employeeId = document.getElementById('employee_id').value;
    const department = document.getElementById('department').value;
    const position = document.getElementById('position').value;
    
    // Validation
    if (fullName.trim() === '') {
        showError('Please enter your full name');
        e.preventDefault();
        return false;
    }
    
    if (username.trim() === '') {
        showError('Please enter a username');
        e.preventDefault();
        return false;
    }
    
    if (email.trim() === '' || !email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        showError('Please enter a valid email');
        e.preventDefault();
        return false;
    }
    
    if (password.trim() === '') {
        showError('Please enter a password');
        e.preventDefault();
        return false;
    }
    
    if (password.length < 6) {
        showError('Password must be at least 6 characters');
        e.preventDefault();
        return false;
    }
    
    if (password !== passwordConfirm) {
        showError('Passwords do not match');
        e.preventDefault();
        return false;
    }
    
    if (employeeId.trim() === '') {
        showError('Please enter your employee ID');
        e.preventDefault();
        return false;
    }
    
    if (department.trim() === '') {
        showError('Please enter your department');
        e.preventDefault();
        return false;
    }
    
    if (position.trim() === '') {
        showError('Please enter your position');
        e.preventDefault();
        return false;
    }
    
    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    submitBtn.textContent = 'Creating Account...';
    submitBtn.disabled = true;
});

function showError(message) {
    const errorDiv = document.getElementById('errorMsg');
    errorDiv.textContent = message;
    errorDiv.style.display = 'block';
    
    setTimeout(() => {
        errorDiv.style.display = 'none';
    }, 5000);
}