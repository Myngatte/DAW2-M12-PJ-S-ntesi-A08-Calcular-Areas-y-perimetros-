// ------------------------------------- Circulo
function validarCirculo() {
    const radioInput = document.getElementById("radio");
    const radioValue = radioInput.value;
    const errorMessage = document.getElementById("error-message");

    // Inicializar variable de error
    errorMessage.textContent = '';

    // isnan y debe ser positivo
    if (isNaN(radioValue) || radioValue <= 0) {
        errorMessage.textContent = "Por favor, ingrese un valor de radio válido (número positivo).";
        return false;
    }
    return true; // OK
}


// -------------------------------------------Cuadrado



