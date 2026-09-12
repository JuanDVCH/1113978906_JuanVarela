<div class="bg-slate-50 border border-slate-200 rounded-xl p-6 mt-6">

    <h2 class="text-lg font-semibold text-slate-800 mb-6">

        Carrito de la Venta

    </h2>

    <div class="overflow-x-auto">

        <table class="min-w-full border border-slate-200 rounded-xl overflow-hidden">

            <thead class="bg-slate-100">

                <tr class="text-left text-slate-700">

                    <th class="px-4 py-3">Código</th>

                    <th class="px-4 py-3">Producto</th>

                    <th class="px-4 py-3 text-center">Cantidad</th>

                    <th class="px-4 py-3 text-end">Precio</th>

                    <th class="px-4 py-3 text-end">Subtotal</th>

                    <th class="px-4 py-3 text-center">Acción</th>

                </tr>

            </thead>

            <tbody id="carrito-body">

                {{-- Los productos se agregarán dinámicamente con JavaScript --}}

                <tr id="carrito-vacio">

                    <td colspan="6" class="py-10 text-center text-slate-500">

                        No hay productos agregados a la venta.

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>