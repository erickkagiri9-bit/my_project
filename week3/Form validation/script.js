const form = document.getElementById("loginForm");

const email = document.getElementById("email");

const password = document.getElementById("password");

const togglePassword =
document.getElementById("togglePassword");

const strengthBar =
document.getElementById("strengthBar");

const successMessage =
document.getElementById("successMessage");

/* EMAIL VALIDATION */

function validateEmail(){

    const emailValue = email.value.trim();

    const emailPattern =
    /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const error =
    email.parentElement.querySelector(".error");

    if(emailValue === ""){

        error.innerText =
        "Email is required";

        return false;
    }

    if(!emailPattern.test(emailValue)){

        error.innerText =
        "Invalid email format";

        return false;
    }

    error.innerText = "";
    return true;
}

/* PASSWORD VALIDATION */

function validatePassword(){

    const passwordValue =
    password.value.trim();

    const error =
    password.parentElement.parentElement
    .querySelector(".error");

    if(passwordValue === ""){

        error.innerText =
        "Password is required";

        return false;
    }

    if(passwordValue.length < 8){

        error.innerText =
        "Minimum 8 characters required";

        return false;
    }

    if(!/[A-Z]/.test(passwordValue)){

        error.innerText =
        "Add at least one uppercase letter";

        return false;
    }

    if(!/[0-9]/.test(passwordValue)){

        error.innerText =
        "Add at least one number";

        return false;
    }

    if(!/[!@#$%^&*]/.test(passwordValue)){

        error.innerText =
        "Add at least one special character";

        return false;
    }

    error.innerText = "";

    return true;
}

/* PASSWORD STRENGTH */

password.addEventListener("input", () => {

    const value = password.value;

    let strength = 0;

    if(value.length >= 8) strength++;

    if(/[A-Z]/.test(value)) strength++;

    if(/[0-9]/.test(value)) strength++;

    if(/[!@#$%^&*]/.test(value)) strength++;

    switch(strength){

        case 1:
            strengthBar.style.width = "25%";
            strengthBar.style.background = "red";
            break;

        case 2:
            strengthBar.style.width = "50%";
            strengthBar.style.background = "orange";
            break;

        case 3:
            strengthBar.style.width = "75%";
            strengthBar.style.background = "yellow";
            break;

        case 4:
            strengthBar.style.width = "100%";
            strengthBar.style.background = "lime";
            break;

        default:
            strengthBar.style.width = "0%";
    }
});

/* SHOW PASSWORD */

togglePassword.addEventListener("click", () => {

    if(password.type === "password"){

        password.type = "text";

        togglePassword.innerText = "🙈";

    } else {

        password.type = "password";

        togglePassword.innerText = "👁";
    }
});

/* REAL TIME VALIDATION */

email.addEventListener("keyup", validateEmail);

password.addEventListener("keyup", validatePassword);

/* FORM SUBMIT */

form.addEventListener("submit", (e) => {

    e.preventDefault();

    const emailValid = validateEmail();

    const passwordValid =
    validatePassword();

    if(emailValid && passwordValid){

        successMessage.innerText =
        "Login Successful ✅";

        form.reset();

        strengthBar.style.width = "0%";
    }

});