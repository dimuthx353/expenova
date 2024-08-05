const signinForm = document.getElementById("signinForm");

function validateEmail(event) {
  const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailFormat.test(signinForm.email.value)) {
    signinForm.email.style.color = "yellowgreen";
  } else {
    signinForm.email.style.color = "crimson";
  }

  
}
