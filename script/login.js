function handleHeader() {
  var token = localStorage.getItem("token");

  var loginButton = document.getElementById("loginbutton");
  var logoutButton = document.getElementById("logoutbutton");
  var logoutButton_child = document.getElementById("loginbutton_child");
  var userNameField = document.getElementById("userName");

  if (token) {
    loginButton.style.display = "block";
    logoutButton.style.display = "none";
    userNameField.style.display = "none";
  } else {
    loginButton.style.display = "none";
    logoutButton.style.display = "block";
    userNameField.style.display = "none";
  }

  logoutButton_child.addEventListener("click", function () {
    localStorage.removeItem("token");
    location.reload();
  });
}

handleHeader();

document.addEventListener("DOMContentLoaded", function () {
  var buttonSubmit = document.getElementById("btnSubmit");

  buttonSubmit.addEventListener("click", function (event) {
    event.preventDefault();

    var emailValue = document.getElementById("email").value;
    var passwordValue = document.getElementById("password").value;

    if (emailValue && passwordValue) {
      var credentials = {
        email: emailValue,
        password: passwordValue,
      };

      fetch("http://172.16.1.122:8000/auth/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(credentials),
      })
        .then((response) => response.json())
        .then((data) => {
          console.log("Server response:", data);
          window.localStorage.setItem("token", data.token);
          location.reload();
          window.location.href = "/index.html";
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      alert("Please enter both email and password.");
    }
  });

  handleHeader();
});
