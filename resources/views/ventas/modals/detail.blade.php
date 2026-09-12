@foreach($ventas as $venta)

<div id="modal-detail-venta-{{ $venta->id_venta }}"
     class="hidden fixed inset-0 bg-black/50 items-center justify-center z-50">

    <div class="bg-white w-full max-w-4xl rounded-xl shadow-lg overflow-hidden">

        {{-- HEADER FACTURA --}}
        <div class="bg-slate-800 text-white p-6 flex justify-between items-center">

            <div>
                <h2 class="text-xl font-bold">
                    FACTURA DE VENTA
                </h2>

                <p class="text-sm text-slate-300">
                    No. {{ $venta->id_venta }} |
                    {{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y') }}
                </p>
            </div>

            <button onclick="cerrarModal('modal-detail-venta-{{ $venta->id_venta }}')"
                    class="text-white text-2xl font-bold">
                ×
            </button>

        </div>

        {{-- CLIENTE --}}
        <div class="p-6 border-b">

            <h3 class="font-bold text-slate-700 mb-3">
                Datos del Cliente
            </h3>

            <p><strong>Tipo:</strong> {{ $venta->cliente->tipo_cliente }}</p>

            @if($venta->cliente->tipo_cliente === 'Empresa')

                <p><strong>Razón Social:</strong> {{ $venta->cliente->razon_social }}</p>
                <p><strong>NIT:</strong> {{ $venta->cliente->nit }}</p>

            @else

                <p><strong>Nombre:</strong> {{ $venta->cliente->nombre_cliente }}</p>
                <p><strong>Cédula:</strong> {{ $venta->cliente->cedula }}</p>

            @endif

        </div>

        {{-- DETALLE PRODUCTOS --}}
        <div class="p-6">

            <h3 class="font-bold text-slate-700 mb-4">
                Productos
            </h3>

            <div class="overflow-x-auto">

                <table class="w-full text-sm border">

                    <thead class="bg-slate-100 text-slate-700">
                        <tr>
                            <th class="p-2 text-left">Producto</th>
                            <th class="p-2 text-center">Cantidad</th>
                            <th class="p-2 text-right">Precio</th>
                            <th class="p-2 text-right">Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($venta->detalleVentas as $detalle)

                        <tr class="border-t">

                            <td class="p-2">
                                {{ $detalle->nombre_producto }}
                            </td>

                            <td class="p-2 text-center">
                                {{ $detalle->cantidad_producto }}
                            </td>

                            <td class="p-2 text-right">
                                $ {{ number_format($detalle->precio_producto, 0, ',', '.') }}
                            </td>

                            <td class="p-2 text-right font-semibold">
                                $ {{ number_format($detalle->subtotal_detalle_venta, 0, ',', '.') }}
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>

        {{-- TOTALES --}}
        <div class="p-6 border-t">

            <div class="flex justify-end">

                <div class="w-full md:w-1/2 space-y-2 text-sm">

                    <div class="flex justify-between">
                        <span>Subtotal:</span>
                        <span>$ {{ number_format($venta->subtotal_venta, 0, ',', '.') }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>IVA:</span>
                        <span>$ {{ number_format($venta->iva, 0, ',', '.') }}</span>
                    </div>

                    <div class="flex justify-between text-lg font-bold text-green-600 border-t pt-2">
                        <span>Total:</span>
                        <span>$ {{ number_format($venta->total_venta, 0, ',', '.') }}</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endforeach