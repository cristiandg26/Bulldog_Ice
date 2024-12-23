// Validación del formulario
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("exampleForm");

    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add("was-validated");
    });

    alert("Hola mundo");
});
