const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);

const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

$(document).ready(function () {
  $("#card").flip({
    axis: "x",
    trigger: "hover"
  });

  $("#card-two").flip({
    axis: "x",
    trigger: "hover"
  });

});
