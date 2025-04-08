function sendResetLink() {
  setTimeout(function () {
    document.getElementById("forgotPasswordForm").style.display = "none";
    document.getElementById("resetLinkMessage").style.display = "block";
  }, 1000); // 1-second delay (replace with your actual logic)
}
