function togglePassword(fieldId, iconElement) {
  const input = document.getElementById(fieldId);
  const icon = iconElement.querySelector('img');

  if (input.type === "password") {
    input.type = "text";
    icon.src = "icons/eye-slash.png"; // Image when showing password
  } else {
    input.type = "password";
    icon.src = "icons/eye.png"; // Image when hiding password
  }
}
