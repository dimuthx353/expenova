const signupForm = document.getElementById("signupForm");

function validateInputs(event) {
  const inputField = event.target;
  const userInput = inputField.value.trim();

  if (userInput.length < 3) {
    inputField.style.color = "crimson";
  } else {
    inputField.style.color = "yellowgreen";
  }
}

function validateEmail(event) {
  const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailFormat.test(signupForm.email.value)) {
    signupForm.email.style.color = "yellowgreen";
  } else {
    signupForm.email.style.color = "crimson";
  }
}

function validatePasswords(event) {
  const pwdErrMsg = document.getElementById("pwdErrMsg");
  const pwd = signupForm.pwd;
  const pwd2 = signupForm.pwd2;

  if (pwd2.value.trim() != pwd.value.trim()) {
    pwdErrMsg.classList.remove("opacity-0");
  } else {
    pwdErrMsg.classList.add("opacity-0");
  }
}

