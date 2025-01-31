jQuery(document).ready(function (t) {
    const form = document.querySelector("form");
    const submitButton = document.getElementById("submit-btn");

    form.addEventListener("submit", function () {
        submitButton.disabled = true;
        submitButton.innerText = "Enviando...";
    });
});
