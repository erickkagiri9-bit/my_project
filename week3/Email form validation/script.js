const email = document.getElementById("email");
const message = document.getElementById("message");
const icon = document.getElementById("icon");
const validateBtn = document.getElementById("validateBtn");

validateBtn.addEventListener("click", () => {

    const pattern =
    /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email.value === ""){

        message.innerHTML = "Please enter an email";
        message.className = "message invalid";

        icon.innerHTML = "⚠️";

        email.style.borderColor = "#ff4d6d";
        email.style.boxShadow = "0 0 15px #ff4d6d";

    }

    else if(email.value.match(pattern)){

        message.innerHTML = "✔ Valid Email Address";
        message.className = "message valid";

        icon.innerHTML = "✅";

        email.style.borderColor = "#00ff99";
        email.style.boxShadow = "0 0 15px #00ff99";

    }

    else{

        message.innerHTML = "✖ Invalid Email Address";
        message.className = "message invalid";

        icon.innerHTML = "❌";

        email.style.borderColor = "#ff4d6d";
        email.style.boxShadow = "0 0 15px #ff4d6d";
    }

});