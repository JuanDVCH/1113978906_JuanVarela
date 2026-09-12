document.addEventListener("DOMContentLoaded", () => {

    const producto = document.getElementById("id_producto");
    const precio = document.getElementById("precio");
    const stock = document.getElementById("stock");
    const cantidad = document.getElementById("cantidad");

    const btnAgregar = document.getElementById("btnAgregarProducto");

    const carrito = document.getElementById("carrito-body");

    const subtotalSpan = document.getElementById("subtotal");
    const ivaSpan = document.getElementById("iva");
    const totalSpan = document.getElementById("total");

    const subtotalInput = document.getElementById("subtotal_input");
    const ivaInput = document.getElementById("iva_input");
    const totalInput = document.getElementById("total_input");

    const detalleInputs = document.getElementById("detalle-venta-inputs");

    let carritoProductos = [];

    /*
    --------------------------------------------------------
    Mostrar información del producto
    --------------------------------------------------------
    */

    producto.addEventListener("change", () => {

        if (!producto.value) {

            precio.value = "";
            stock.value = "";
            return;

        }

        const option = producto.options[producto.selectedIndex];

        precio.value = Number(option.dataset.precio).toLocaleString("es-CO");

        stock.value = option.dataset.stock;

    });

    /*
    --------------------------------------------------------
    Agregar producto
    --------------------------------------------------------
    */

    btnAgregar.addEventListener("click", () => {

        if (!producto.value) {

            alert("Seleccione un producto.");

            return;

        }

        const option = producto.options[producto.selectedIndex];

        const id = producto.value;
        const codigo = option.dataset.codigo;
        const nombre = option.dataset.nombre;
        const precioProducto = Number(option.dataset.precio);
        const stockDisponible = Number(option.dataset.stock);

        const cantidadProducto = Number(cantidad.value);

        if (cantidadProducto <= 0) {

            alert("Ingrese una cantidad válida.");

            return;

        }

        if (cantidadProducto > stockDisponible) {

            alert("Stock insuficiente.");

            return;

        }

        const existente = carritoProductos.find(p => p.id == id);

        if (existente) {

            if (existente.cantidad + cantidadProducto > stockDisponible) {

                alert("No hay suficiente stock.");

                return;

            }

            existente.cantidad += cantidadProducto;

        } else {

            carritoProductos.push({

                id: id,
                codigo: codigo,
                nombre: nombre,
                precio: precioProducto,
                cantidad: cantidadProducto

            });

        }

        pintarCarrito();

        producto.selectedIndex = 0;
        precio.value = "";
        stock.value = "";
        cantidad.value = 1;

    });

    /*
    --------------------------------------------------------
    Pintar carrito
    --------------------------------------------------------
    */

    function pintarCarrito() {

        carrito.innerHTML = "";

        if (carritoProductos.length === 0) {

            carrito.innerHTML = `
                <tr>
                    <td colspan="6"
                        class="text-center py-8 text-slate-500">
                        No hay productos agregados.
                    </td>
                </tr>
            `;

            generarInputs();
            actualizarTotales();

            return;

        }

        carritoProductos.forEach((item, index) => {

            const subtotal = item.precio * item.cantidad;

            carrito.innerHTML += `
                <tr class="border-t">

                    <td class="px-4 py-3">${item.codigo}</td>

                    <td class="px-4 py-3">${item.nombre}</td>

                    <td class="px-4 py-3 text-center">${item.cantidad}</td>

                    <td class="px-4 py-3 text-end">
                        $ ${item.precio.toLocaleString("es-CO")}
                    </td>

                    <td class="px-4 py-3 text-end">
                        $ ${subtotal.toLocaleString("es-CO")}
                    </td>

                    <td class="px-4 py-3 text-center">

                        <button
                            type="button"
                            class="text-red-600 hover:text-red-800"
                            onclick="eliminarProducto(${index})">

                            ✖

                        </button>

                    </td>

                </tr>
            `;

        });

        generarInputs();

        actualizarTotales();

    }

    /*
    --------------------------------------------------------
    Generar Inputs Hidden
    --------------------------------------------------------
    */

    function generarInputs() {

        detalleInputs.innerHTML = "";

        carritoProductos.forEach((item, index) => {

            detalleInputs.innerHTML += `

                <input
                    type="hidden"
                    name="productos[${index}][id_producto]"
                    value="${item.id}">

                <input
                    type="hidden"
                    name="productos[${index}][cantidad]"
                    value="${item.cantidad}">

                <input
                    type="hidden"
                    name="productos[${index}][precio]"
                    value="${item.precio}">
            `;

        });

    }

    /*
    --------------------------------------------------------
    Eliminar producto
    --------------------------------------------------------
    */

    window.eliminarProducto = function(index) {

        carritoProductos.splice(index, 1);

        pintarCarrito();

    };

    /*
    --------------------------------------------------------
    Totales
    --------------------------------------------------------
    */

    function actualizarTotales() {

        let subtotal = 0;

        carritoProductos.forEach(item => {

            subtotal += item.precio * item.cantidad;

        });

        const iva = subtotal * 0.19;

        const total = subtotal + iva;

        subtotalSpan.textContent = "$ " + subtotal.toLocaleString("es-CO");
        ivaSpan.textContent = "$ " + iva.toLocaleString("es-CO");
        totalSpan.textContent = "$ " + total.toLocaleString("es-CO");

        subtotalInput.value = subtotal;
        ivaInput.value = iva;
        totalInput.value = total;

    }

});