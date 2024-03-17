// ? variables
const signupForm = document.getElementById("signupForm");

// ?jquery
$(document).ready(function () {
  $("#signupForm").submit(function (e) {
    e.preventDefault();

    const allInputs = signupForm.querySelectorAll("input");

    allInputs.forEach((input) => {
      if (input.value.trim().length <= 0) {
        input.classList.add("border-danger");
      }
    });
  });
});

// ? functions
function validateForm(e) {
  const password1 = signupForm.password;
  const password2 = signupForm.password2;

  if (e.target.value.trim().length <= 3) {
    e.target.classList.add("border-danger");
  } else {
    e.target.classList.remove("border-danger");
    e.target.classList.add("border-success");
  }

  if (
    password1.value !== password2.value ||
    password1.value.trim().length == 0 ||
    password2.value.trim().length == 0
  ) {
    password1.classList.add("border-danger");
    password2.classList.add("border-danger");
  } else {
    password1.classList.remove("border-danger");
    password2.classList.remove("border-danger");
    password1.classList.add("border-success");
    password2.classList.add("border-success");
  }
}
