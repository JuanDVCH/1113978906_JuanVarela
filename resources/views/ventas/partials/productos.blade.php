<div class="bg-slate-50 border border-slate-200 rounded-xl p-6 mt-6">

    <h2 class="text-lg font-semibold text-slate-800 mb-6">

        Agregar Producto

    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">

        {{-- Producto --}}
        <div class="lg:col-span-6">

            <x-form.select
                name="id_producto"
                id="id_producto"
                label="Producto">

                <option value="">
                    Seleccione un producto...
                </option>

                @foreach($productos as $producto)

                    <option
                        value="{{ $producto->id_producto }}"
                        data-codigo="{{ $producto->codigo_producto }}"
                        data-nombre="{{ $producto->nombre_producto }}"
                        data-precio="{{ $producto->precio_producto }}"
                        data-stock="{{ $producto->stock }}">

                        {{ $producto->codigo_producto }}
                        -
                        {{ $producto->nombre_producto }}

                    </option>

                @endforeach

            </x-form.select>

        </div>

        {{-- Precio --}}
        <div class="lg:col-span-2">

            <x-form.input
                name="precio"
                id="precio"
                type="text"
                label="Precio"
                value="$0"
                readonly />

        </div>

        {{-- Stock --}}
        <div class="lg:col-span-2">

            <x-form.input
                name="stock"
                id="stock"
                type="text"
                label="Stock"
                value="0"
                readonly />

        </div>

        {{-- Cantidad --}}
        <div class="lg:col-span-2">

            <x-form.input
                name="cantidad"
                id="cantidad"
                type="number"
                label="Cantidad"
                value="1"
                min="1" />

        </div>

    </div>

    <div class="flex justify-end mt-6">

        <x-button
            type="button"
            id="btnAgregarProducto"
            variant="create">

            + Agregar al Carrito

        </x-button>

    </div>

</div>