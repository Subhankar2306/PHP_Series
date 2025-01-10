$(document).ready(function () {
  $("#userForm").on("submit", function (e) {
      // Clear previous error messages
      $(".error").text("");

      // Get input values
      const username = $("#username").val().trim();
      const email = $("#email").val().trim();
      const password = $("#password").val().trim();

      let isValid = true;

      // Validate username
      if (username === "") {
          $("#usernameError").text("Username is required.");
          isValid = false;
      } else if (username.length < 3) {
          $("#usernameError").text("Username must be at least 3 characters.");
          isValid = false;
      }

      // Validate email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email === "") {
          $("#emailError").text("Email is required.");
          isValid = false;
      } else if (!emailRegex.test(email)) {
          $("#emailError").text("Please enter a valid email.");
          isValid = false;
      }

      // Validate password
      if (password === "") {
          $("#passwordError").text("Password is required.");
          isValid = false;
      } else if (password.length < 6) {
          $("#passwordError").text("Password must be at least 6 characters.");
          isValid = false;
      }

      // Prevent form submission if validation fails
      if (!isValid) {
          e.preventDefault();
      }
  });
});
