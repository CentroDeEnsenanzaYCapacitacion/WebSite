document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.sf-menu > li > a');

    
    function removeCurrentClass() {
        menuItems.forEach(item => item.parentElement.classList.remove('current'));
    }

    
    menuItems.forEach(item => {
        const href = new URL(item.href).pathname;
        if (href === window.location.pathname) {
            removeCurrentClass();
            item.parentElement.classList.add('current');
        }
    });

    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            
            removeCurrentClass();

            
            item.parentElement.classList.add('current');

            
            if (item.closest('.sf-with-ul')) {
                item.closest('.sf-with-ul').parentElement.classList.add('current');
            }
        });
    });
});
