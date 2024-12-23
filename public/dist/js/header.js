// Inicializa todos los tooltips
document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Navegación entre secciones
    const navLinks = document.querySelectorAll('#sidebar .nav-link');
    const contentSections = document.querySelectorAll('.content');

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            // Cambiar el estado activo del menú
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');

            // Mostrar la sección correspondiente
            const target = this.getAttribute('data-target');
            contentSections.forEach(section => {
                section.classList.remove('active');
                if (section.id === target) {
                    section.classList.add('active');
                }
            });
        });
    });
});