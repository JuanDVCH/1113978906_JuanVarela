<x-modal
    id="modal-create-producto"
    title="Registrar Producto">

    <x-form.form
        action="{{ route('productos.store') }}"
        method="POST">

        @include('productos.partials.form')

        <div class="flex justify-end gap-3 mt-8">

            <x-button
                type="button"
                variant="secondary"
                data-close-modal="modal-create-producto">

                Cancelar

            </x-button>

            <x-button
                type="submit"
                variant="create">

                Guardar Producto

            </x-button>

        </div>

    </x-form.form>

</x-modal>