<div class="grid grid-cols-1 md:grid-cols-2 gap-5">

    @forelse($clientes as $cliente)
        <div class="bg-white rounded-xl border border-slate-200 shadow hover:shadow-lg transition">

            <div class="p-6">

                <div class="flex flex-col lg:flex-row justify-between gap-6">

                    <div class="flex-1">

                        <div class="flex items-center gap-3">

                            <div class="h-14 w-14 rounded-full bg-cyan-100 flex items-center justify-center text-2xl">
                                {{ $cliente->tipo_cliente == 'Empresa' ? '🏢' : '👤' }}
                            </div>

                            <div>
                                <h2 class="text-xl font-bold text-slate-800">
                                    {{ $cliente->tipo_cliente == 'Empresa' ? $cliente->razon_social : $cliente->nombre_cliente }}
                                </h2>

                                <span class="text-cyan-600 font-medium">
                                    {{ $cliente->tipo_cliente }}
                                </span>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

                            <div>
                                <p class="text-sm text-slate-500">
                                    {{ $cliente->tipo_cliente == 'Empresa' ? 'NIT' : 'Cédula' }}
                                </p>
                                <p class="font-semibold">
                                    {{ $cliente->tipo_cliente == 'Empresa' ? $cliente->nit : $cliente->cedula }}
                                </p>
                            </div>

                            <div>
                                <p class="text-sm text-slate-500">Fecha Registro</p>
                                <p class="font-semibold">
                                    {{ $cliente->created_at->format('d/m/Y') }}
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @empty

        <div class="bg-white rounded-xl border border-dashed border-slate-300 p-10 text-center md:col-span-2">

            <h2 class="text-xl font-semibold text-slate-700">
                No hay clientes registrados
            </h2>

            <p class="text-slate-500 mt-2">
                Agrega tu primer cliente para comenzar.
            </p>

        </div>

    @endforelse

</div>