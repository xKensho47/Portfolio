document.addEventListener('DOMContentLoaded', function () {
    const carouselContainer = document.querySelector('.carousel-container');
    const carousels = document.querySelectorAll('.carousel'); // Todos los proyectos
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    
    let currentSlide = 0;
    const totalSlides = carousels.length;

    // Función para mover el carrusel
    function moveCarousel(slideIndex) {
        // Asegurarse de que el índice esté dentro de los límites
        if (slideIndex < 0) {
            currentSlide = totalSlides - 1; // Si está en el primer slide, vuelve al último
        } else if (slideIndex >= totalSlides) {
            currentSlide = 0; // Si está en el último slide, vuelve al primero
        } else {
            currentSlide = slideIndex;
        }

        // Mueve el carrusel al proyecto correspondiente
        const offset = -currentSlide * 100; // Mover en función del índice de slide
        carousels.forEach(carousel => {
            carousel.style.transform = `translateX(${offset}%)`;
        });
    }

    // Evento para el botón "prev"
    prevButton.addEventListener('click', function () {
        moveCarousel(currentSlide - 1);
    });

    // Evento para el botón "next"
    nextButton.addEventListener('click', function () {
        moveCarousel(currentSlide + 1);
    });

    // Inicialización (muestra el primer proyecto al cargar la página)
    moveCarousel(currentSlide);
});
