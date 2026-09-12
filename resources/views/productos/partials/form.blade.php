<x-form.group>

    <x-form.input
        name="codigo_producto"
        label="Código del Producto"
        placeholder="Ej: P001"
        required />

    <x-form.input
        name="nombre_producto"
        label="Nombre del Producto"
        placeholder="Nombre del producto"
        required />

</x-form.group>

<x-form.group>

    <x-form.input
        type="number"
        step="0.01"
        min="0"
        name="precio_producto"
        label="Precio"
        placeholder="0.00"
        required />

    <x-form.input
        type="number"
        min="0"
        name="stock"
        label="Stock"
        placeholder="0"
        required />

</x-form.group>