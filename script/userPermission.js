function handlePermission() {
  if (
    sessionStorage.getItem("role") !== "STUDENT" &&
    sessionStorage.getItem("role") !== "ADMIN"
  ) {
    window.location.href = "../index.html";
    // alert("You need to login");
  }
}

handlePermission();
