function openSuccessModal() {
  $("#successModal").modal("show");
}
let elements = document.querySelectorAll(".success-button");
elements.forEach(function (element) {
  element.addEventListener("click", function (e) {
    e.preventDefault();
    let button_id = element.dataset.id;
    // console.log(button_id);
    document.getElementById("code-value").value = button_id;
    openSuccessModal();
  });
});

function openFailedModal() {
  $("#failedModal").modal("show");
}

let buttons = document.querySelectorAll(".failure-button");
buttons.forEach(function (button) {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    let button_val = button.dataset.val;
    // console.log(button_val);
    document.getElementById("helpCode").value = button_val;
    openFailedModal();
  });
});
