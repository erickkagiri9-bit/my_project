// Fake user database (for demo)
const users = [
  { username: "admin", password: "1234" },
  { username: "user", password: "pass" }
];

// LOGIN PAGE LOGIC
if (document.getElementById("loginForm")) {
  const form = document.getElementById("loginForm");
  const errorMsg = document.getElementById("errorMsg");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const user = users.find(
      u => u.username === username && u.password === password
    );

    if (user) {
      sessionStorage.setItem("loggedInUser", username);
      window.location.href = "welcome.html";
    } else {
      errorMsg.textContent = "Invalid username or password!";
    }
  });
}

// WELCOME PAGE LOGIC
if (document.getElementById("welcomeText")) {
  const user = sessionStorage.getItem("loggedInUser");

  if (!user) {
    window.location.href = "index.html";
  }

  document.getElementById("welcomeText").textContent =
    "Welcome, " + user + "!";

  document.getElementById("logoutBtn").addEventListener("click", () => {
    sessionStorage.removeItem("loggedInUser");
    window.location.href = "index.html";
  });
}