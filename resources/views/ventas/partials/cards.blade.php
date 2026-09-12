<div class="space-y-5">

    @forelse($ventas as $venta)

        <div class="bg-white rounded-xl border border-slate-200 shadow hover:shadow-lg transition">

            <div class="p-6">

                <div class="flex flex-col lg:flex-row justify-between gap-6">

                    <div class="flex-1">

                        <div class="flex items-center gap-4">

                            <div class="h-14 w-14 rounded-full bg-cyan-100 flex items-center justify-center text-2xl">

                                🧾

                            </div>

                            <div>

                                <h2 class="text-xl font-bold text-slate-800">

                                    Venta #{{ $venta->id_venta }}

                                </h2>

                                <span class="text-cyan-600 font-medium">

                                    {{ $venta->cliente->nombre_cliente }}

                                </span>

                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mt-6">

                            <div>

                                <p class="text-sm text-slate-500">

                                    Fecha

                                </p>

                                <p class="font-semibold">

                                    {{ \Carbon\Carbon::parse($venta->fecha_venta)->format('d/m/Y') }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Subtotal

                                </p>

                                <p class="font-semibold">

                                    $ {{ number_format($venta->subtotal_venta,0,',','.') }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    IVA

                                </p>

                                <p class="font-semibold">

                                    $ {{ number_format($venta->iva,0,',','.') }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Total

                                </p>

                                <p class="font-bold text-green-600">

                                    $ {{ number_format($venta->total_venta,0,',','.') }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Productos

                                </p>

                                <p class="font-semibold">

                                    {{ $venta->detalleVentas->count() }}

                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="flex flex-col justify-center gap-3 lg:w-44">

                        <x-button
                            variant="primary"
                            onclick="abrirModal('modal-detail-venta-{{ $venta->id_venta }}')">

                            Ver Factura

                        </x-button>

                    </div>

                </div>

            </div>

        </div>

        @include('ventas.modals.detail')

    @empty

        <div class="bg-white rounded-xl border border-dashed border-slate-300 p-12 text-center">

            <div class="text-6xl mb-4">

                🧾

            </div>

            <h2 class="text-2xl font-bold text-slate-700">

                No hay ventas registradas

            </h2>

            <p class="text-slate-500 mt-3">

                Presione <strong>+ Nueva Venta</strong> para registrar la primera venta.

            </p>

        </div>

    @endforelse

</div>