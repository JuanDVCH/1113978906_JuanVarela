<div class="space-y-5">

    @forelse($productos as $producto)
        <div class="bg-white rounded-xl border border-slate-200 shadow hover:shadow-lg transition">

            <div class="p-6">

                <div class="flex flex-col lg:flex-row justify-between gap-6">

                    <div class="flex-1">

                        <div class="flex items-center gap-4">

                            <div class="h-14 w-14 rounded-full bg-cyan-100 flex items-center justify-center text-2xl">

                                📦

                            </div>

                            <div>

                                <h2 class="text-xl font-bold text-slate-800">

                                    {{ $producto->nombre_producto }}

                                </h2>

                                <span class="text-cyan-600 font-medium">

                                    Código: {{ $producto->codigo_producto }}

                                </span>

                            </div>

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">

                            <div>

                                <p class="text-sm text-slate-500">

                                    Precio

                                </p>

                                <p class="font-semibold text-green-600">

                                    $ {{ number_format($producto->precio_producto, 0, ',', '.') }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Stock

                                </p>

                                <p class="font-semibold">

                                    {{ $producto->stock }}

                                </p>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Estado

                                </p>

                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold
    {{ $producto->estado == 'Disponible' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">

                                    {{ $producto->estado }}

                                </span>

                            </div>

                            <div>

                                <p class="text-sm text-slate-500">

                                    Registro

                                </p>

                                <p class="font-semibold">

                                    {{ $producto->created_at->format('d/m/Y') }}

                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="flex flex-col justify-center gap-3 lg:w-44">

                        <x-button variant="primary"
                            onclick="abrirModal('modal-edit-producto-{{ $producto->id_producto }}')">
                            Editar
                        </x-button>
                        @include('productos.modals.edit')
                    </div>

                </div>

            </div>

        </div>

    @empty

        <div class="bg-white rounded-xl border border-dashed border-slate-300 p-10 text-center">

            <div class="text-6xl mb-4">

                📦

            </div>

            <h2 class="text-2xl font-bold text-slate-700">

                No hay productos registrados

            </h2>

            <p class="text-slate-500 mt-2">

                Agrega el primer producto para comenzar.

            </p>

        </div>
    @endforelse

</div>
