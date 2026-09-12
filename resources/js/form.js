document.addEventListener('DOMContentLoaded', function () {

    const tipoCliente = document.getElementById('tipo_cliente');

    const nombre = document.getElementById('nombre_cliente');
    const cedula = document.getElementById('cedula');
    const razonSocial = document.getElementById('razon_social');
    const nit = document.getElementById('nit');

    function deshabilitar(campo) {
        campo.disabled = true;
        campo.classList.add(
            'bg-gray-200',
            'text-gray-500',
            'opacity-60',
            'cursor-not-allowed'
        );
    }

    function habilitar(campo) {
        campo.disabled = false;
        campo.classList.remove(
            'bg-gray-200',
            'text-gray-500',
            'opacity-60',
            'cursor-not-allowed'
        );
    }

    function actualizarCampos() {

        const valor = tipoCliente.value;

        if (valor === 'Natural') {

            habilitar(nombre);
            habilitar(cedula);

            deshabilitar(razonSocial);
            deshabilitar(nit);

            razonSocial.value = '';
            nit.value = '';

        } else if (valor === 'Empresa') {

            deshabilitar(nombre);
            deshabilitar(cedula);

            habilitar(razonSocial);
            habilitar(nit);

            nombre.value = '';
            cedula.value = '';

        } else {

            habilitar(nombre);
            habilitar(cedula);
            habilitar(razonSocial);
            habilitar(nit);
        }
    }

    tipoCliente.addEventListener('change', actualizarCampos);

    actualizarCampos();
});