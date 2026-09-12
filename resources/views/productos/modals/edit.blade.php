<x-modal
    id="modal-edit-producto-{{ $producto->id_producto }}"
    title="Editar Producto">

    <x-form.form
        action="{{ route('productos.update', $producto->id_producto) }}"
        method="PUT">

        @include('productos.partials.form-edit')

        <div class="flex justify-end gap-3 mt-8">

            <x-button
                type="button"
                variant="secondary"
                data-close-modal="modal-edit-producto-{{ $producto->id_producto }}">

                Cancelar

            </x-button>

            <x-button
                type="submit"
                variant="warning">

                Actualizar Producto

            </x-button>

        </div>

    </x-form.form>

</x-modal>