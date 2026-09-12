export function abrirModal(id) {

    const modal = document.getElementById(id);

    if (!modal) return;

    modal.classList.remove('hidden');
    modal.classList.add('flex');

}

export function cerrarModal(id) {

    const modal = document.getElementById(id);

    if (!modal) return;

    modal.classList.add('hidden');
    modal.classList.remove('flex');

}

// Cerrar con botones
document.addEventListener('click', (e) => {

    const boton = e.target.closest('[data-close-modal]');

    if (!boton) return;

    cerrarModal(boton.dataset.closeModal);

});

// Cerrar haciendo clic fuera del modal
document.addEventListener('click', (e) => {

    if (e.target.classList.contains('fixed')) {

        const id = e.target.id;

        cerrarModal(id);

    }

});

// Cerrar con ESC
document.addEventListener('keydown', (e) => {

    if (e.key !== 'Escape') return;

    document.querySelectorAll('.fixed.flex').forEach(modal => {

        modal.classList.add('hidden');
        modal.classList.remove('flex');

    });

});

// Disponible globalmente
window.abrirModal = abrirModal;
window.cerrarModal = cerrarModal;