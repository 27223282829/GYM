function togglePassword(inputId, element) {
    const input = document.getElementById(inputId);
    const svg = element.querySelector("svg");

    if (input.type === "password") {
        input.type = "text";
        svg.style.fill = "#007bff"; // Azul al mostrar
    } else {
        input.type = "password";
        svg.style.fill = "#555"; // Gris al ocultar
    }
}

function showEye(inputId, eyeId) {
    const input = document.getElementById(inputId);
    const eye = document.getElementById(eyeId);

    if (input.value.length > 0) {
        eye.classList.remove('hide-eye');
    } else {
        eye.classList.add('hide-eye');
    }
}
