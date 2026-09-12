<x-modal id="modal-create-cliente" title="Registrar Cliente" size="xl">

    <x-form.form action="{{ route('clientes.store') }}" method="POST">

        {{-- Campos del formulario --}}
        @include('clientes.partials.form')

        {{-- Botones --}}
        <div class="flex justify-end gap-3 mt-8 border-t pt-6">

            <x-button type="button" variant="secondary" data-close-modal="modal-create-cliente">

                Cancelar

            </x-button>

            <x-button type="submit" variant="success">

                Guardar Cliente

            </x-button>

        </div>

    </x-form.form>

</x-modal>
