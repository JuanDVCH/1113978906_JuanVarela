document.addEventListener('DOMContentLoaded', function () {

    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggleSidebar');

    if (!sidebar || !toggle) {
        console.error('Sidebar o botón no encontrado');
        return;
    }

    toggle.addEventListener('click', function () {
        sidebar.classList.toggle('hidden');
    });

});