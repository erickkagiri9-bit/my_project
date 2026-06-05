const greeting = document.getElementById("greeting");
const clock = document.getElementById("clock");
const welcomeMessage = document.getElementById("welcomeMessage");
const nameInput = document.getElementById("nameInput");

// Greeting Based on Time
function updateGreeting(){

    const hour = new Date().getHours();

    if(hour < 12){
        greeting.textContent = "☀️ Good Morning";
    }
    else if(hour < 18){
        greeting.textContent = "🌤️ Good Afternoon";
    }
    else{
        greeting.textContent = "🌙 Good Evening";
    }
}

// Live Clock
function updateClock(){

    const now = new Date();

    clock.textContent =
        now.toLocaleTimeString();
}

setInterval(updateClock,1000);
updateClock();
updateGreeting();

// Save Name
function saveName(){

    const name = nameInput.value.trim();

    if(name === ""){
        alert("Please enter your name.");
        return;
    }

    localStorage.setItem("username",name);

    displayWelcome();
}

// Display Welcome Message
function displayWelcome(){

    const name =
        localStorage.getItem("username");

    if(name){

        welcomeMessage.innerHTML =
        `🎉 Welcome back, <strong>${name}</strong>!`;

        nameInput.style.display = "none";
        document.querySelector("button").style.display = "none";
    }
}

displayWelcome();