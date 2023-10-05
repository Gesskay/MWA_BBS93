// script.js
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const errorMessage = document.getElementById("error-message");
    const timeElement = document.getElementById("time");
  
    // Function to update the system time
    function updateTime() {
      const currentTime = new Date();
      const hours = currentTime.getHours().toString().padStart(2, "0");
      const minutes = currentTime.getMinutes().toString().padStart(2, "0");
      const seconds = currentTime.getSeconds().toString().padStart(2, "0");
  
      const formattedTime = `${hours}:${minutes}:${seconds}`;
      timeElement.textContent = `System Time: ${formattedTime}`;
    }
  
    // Update the system time every second
    updateTime();
    setInterval(updateTime, 1000);
  
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();
  
      // You can implement actual login logic here, for now, we'll just check for sample credentials.
      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;
  
      if (username === "user" && password === "password") {
        // Redirect to the user's account page or perform necessary actions
        window.location.href = "/home/gesskay/Documents/Studies/MWA_BBS93/DA2/homepage/index.html";
      } else {
        errorMessage.textContent = "Invalid username or password. Please try again.";
        // Use the alert() method to show an alert
        alert("Invalid username or password. Please try again.");
      }
    });
  
    // Add popover functionality
    const greetingButton = document.getElementById("greeting-button");
     const popover = document.getElementById("greeting-popover");
  
    $('#greeting-button').popover();
  });
  