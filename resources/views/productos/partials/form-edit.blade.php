<x-form.group>

    <x-form.input
        name="codigo_producto"
        label="Código"
        :value="$producto->codigo_producto"
        disabled />

    <x-form.input
        name="nombre_producto"
        label="Nombre"
        :value="$producto->nombre_producto"
        disabled />

</x-form.group>

<x-form.group>

    <x-form.input
        type="number"
        step="0.01"
        min="0"
        name="precio_producto"
        label="Precio"

        :value="$producto->precio_producto"

        required />

    <x-form.input
        type="number"
        min="0"
        name="stock"
        label="Stock"

        :value="$producto->stock"

        required />

</x-form.group>

<div>

    <label class="block text-sm font-semibold text-slate-700 mb-2">

        Estado

    </label>

    <div
        class="w-full rounded-xl border border-slate-300 bg-slate-100 px-4 py-3 text-slate-600">

        {{ $producto->estado }}

    </div>

    <p class="text-xs text-slate-500 mt-2">

        El estado se actualiza automáticamente según el stock.

    </p>

</div>