<x-modal id="modal-create-venta" title="Registrar Venta">

    <x-form.form action="{{ route('ventas.store') }}">

        @include('ventas.partials.cliente')

        @include('ventas.partials.productos')

        @include('ventas.partials.carrito')
        
        <div id="detalle-venta-inputs"></div>

        @include('ventas.partials.resumen')

    </x-form.form>

</x-modal>
