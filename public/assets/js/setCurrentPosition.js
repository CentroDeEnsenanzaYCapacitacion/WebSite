document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.sf-menu > li > a');

    // Función para quitar la clase 'current' de todos los elementos
    function removeCurrentClass() {
        menuItems.forEach(item => item.parentElement.classList.remove('current'));
    }

    // Al cargar la página, asignar la clase 'current' según la URL
    menuItems.forEach(item => {
        const href = new URL(item.href).pathname;
        if (href === window.location.pathname) {
            removeCurrentClass();
            item.parentElement.classList.add('current');
        }
    });

    // Agregar el evento click para manejar la navegación
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Remover la clase 'current' de todos los elementos
            removeCurrentClass();

            // Añadir la clase 'current' al elemento que corresponde
            item.parentElement.classList.add('current');

            // Si es un submenú, mantener 'current' en el padre
            if (item.closest('.sf-with-ul')) {
                item.closest('.sf-with-ul').parentElement.classList.add('current');
            }
        });
    });
});
