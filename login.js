document.addEventListener("DOMContentLoaded", function() {
    const loginBtn = document.getElementById("loginBtn");
    const loginContainer = document.getElementById("loginContainer");
    const loginForm = document.getElementById("loginForm");
    const registerLink = document.getElementById("registerLink");
    const registerForm = document.getElementById("registerForm");
    const loginLink = document.getElementById("loginLink");
  
    loginBtn.addEventListener("click", function() {
      loginContainer.style.display = "flex";
      loginForm.style.display = "block"; // Ensuring the login form is displayed
      document.body.style.filter = "blur(0px)"; // Applying blur effect to the background
    });
  
    loginForm.addEventListener("submit", function(event) {
      event.preventDefault();
      const username = loginForm.querySelector('input[type="text"]').value;
      const password = loginForm.querySelector('input[type="password"]').value;
      // Your login form submission logic here (you can add more validation)
      if (username && password) {
        alert("Logged in successfully!");
        window.location.href = "index11.html"; // Replace "index.html" with your actual home page URL
      } else {
        alert("Please enter username and password");
      }
    });
  
    registerLink.addEventListener("click", function(event) {
      event.preventDefault();
      loginForm.style.display = "none";
      registerForm.style.display = "block";
    });
  
    loginLink.addEventListener("click", function(event) {
      event.preventDefault();
      registerForm.style.display = "none";
      loginForm.style.display = "block";
    });
  });
  