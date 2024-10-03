document.addEventListener("DOMContentLoaded", function() {
    // Selecciona el mensaje de alerta
    const alertMessage = document.querySelector('.alert');

    if (alertMessage) {
        // Desaparece el mensaje después de 5 segundos
        setTimeout(() => {
            alertMessage.style.opacity = '0';
            alertMessage.style.transition = 'opacity 0.5s ease-out'; // Transición suave
            setTimeout(() => {
                alertMessage.remove(); // Elimina el elemento del DOM después de la transición
            }, 500); // Tiempo de espera para la eliminación (coincide con la duración de la transición)
        }, 3000); // 5000 milisegundos = 3 segundos
    }
});