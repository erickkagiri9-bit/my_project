const form = document.getElementById("form");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  // Input values
  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  // Error elements
  const nameError = document.getElementById("nameError");
  const emailError = document.getElementById("emailError");
  const passwordError = document.getElementById("passwordError");

  // Success message
  const successMessage = document.getElementById("successMessage");

  // Clear previous messages
  nameError.textContent = "";
  emailError.textContent = "";
  passwordError.textContent = "";
  successMessage.style.display = "none";

  let isValid = true;

  // Username validation
  if (username === "") {
    nameError.textContent = "Username is required";
    isValid = false;
  }

  // Email validation
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (email === "") {
    emailError.textContent = "Email is required";
    isValid = false;
  } else if (!emailPattern.test(email)) {
    emailError.textContent = "Enter a valid email";
    isValid = false;
  }

  // Password validation
  if (password === "") {
    passwordError.textContent = "Password is required";
    isValid = false;
  } else if (password.length < 6) {
    passwordError.textContent = "Password must be at least 6 characters";
    isValid = false;
  }

  // Success
  if (isValid) {
    successMessage.textContent = "Form submitted successfully!";
    successMessage.style.display = "block";

    form.reset();

    // Hide success message after 3 seconds
    setTimeout(() => {
      successMessage.style.display = "none";
    }, 3000);
  }
});