const form = document.getElementById("registrationForm");
const password = document.getElementById("password");
const strengthBar = document.getElementById("strengthBar");
const toast = document.getElementById("toast");

const fields = [
    "name",
    "email",
    "phone",
    "department",
    "message"
];

// Load saved drafts
fields.forEach(field => {
    const element = document.getElementById(field);

    if (localStorage.getItem(field)) {
        element.value = localStorage.getItem(field);
    }

    element.addEventListener("input", () => {
        localStorage.setItem(field, element.value);
    });
});

// Password strength checker
password.addEventListener("input", () => {

    let score = 0;
    const value = password.value;

    if (value.length >= 8) score++;
    if (/[A-Z]/.test(value)) score++;
    if (/[0-9]/.test(value)) score++;
    if (/[^A-Za-z0-9]/.test(value)) score++;

    strengthBar.style.width = `${score * 25}%`;

    if (score <= 1) {
        strengthBar.style.background = "red";
    } else if (score <= 3) {
        strengthBar.style.background = "orange";
    } else {
        strengthBar.style.background = "green";
    }
});

// Toast Notification
function showToast(message, type) {

    toast.textContent = message;
    toast.className = `toast ${type}`;
    toast.style.display = "block";

    setTimeout(() => {
        toast.style.display = "none";
    }, 3000);
}

// Validation
function validateForm() {

    let valid = true;

    document.querySelectorAll(".error").forEach(error => {
        error.textContent = "";
    });

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const department = document.getElementById("department").value;
    const pwd = password.value;

    if (name.length < 3) {
        document.getElementById("nameError").textContent =
            "Enter at least 3 characters";
        valid = false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent =
            "Invalid email address";
        valid = false;
    }

    if (phone.length < 10) {
        document.getElementById("phoneError").textContent =
            "Invalid phone number";
        valid = false;
    }

    if (department === "") {
        document.getElementById("departmentError").textContent =
            "Select a department";
        valid = false;
    }

    if (pwd.length < 8) {
        document.getElementById("passwordError").textContent =
            "Password must be at least 8 characters";
        valid = false;
    }

    return valid;
}

// Form Submission
form.addEventListener("submit", async (e) => {

    e.preventDefault();

    if (!validateForm()) return;

    const submitBtn = document.getElementById("submitBtn");
    const loader = document.getElementById("loader");

    submitBtn.disabled = true;
    loader.style.display = "inline-block";

    const formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        department: document.getElementById("department").value,
        message: document.getElementById("message").value
    };

    try {

        // Replace with actual API endpoint
        await new Promise(resolve => setTimeout(resolve, 2000));

        console.log("Submitted Data:", formData);

        showToast("Form submitted successfully!", "success");

        form.reset();

        fields.forEach(field => {
            localStorage.removeItem(field);
        });

        strengthBar.style.width = "0%";

    } catch (error) {

        showToast("Submission failed!", "error");

    } finally {

        submitBtn.disabled = false;
        loader.style.display = "none";
    }
});