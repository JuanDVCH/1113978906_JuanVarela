<div class="bg-slate-50 border border-slate-200 rounded-xl p-6 mt-6">

    <h2 class="text-lg font-semibold text-slate-800 mb-6">

        Resumen de la Venta

    </h2>

    <div class="max-w-md ml-auto space-y-4">

        {{-- Subtotal --}}
        <div class="flex justify-between items-center border-b border-slate-200 pb-3">

            <span class="text-slate-600 font-medium">

                Subtotal

            </span>

            <span
                id="subtotal"
                class="text-lg font-semibold text-slate-800">

                $ 0

            </span>

        </div>

        {{-- IVA --}}
        <div class="flex justify-between items-center border-b border-slate-200 pb-3">

            <span class="text-slate-600 font-medium">

                IVA (19%)

            </span>

            <span
                id="iva"
                class="text-lg font-semibold text-slate-800">

                $ 0

            </span>

        </div>

        {{-- Total --}}
        <div class="flex justify-between items-center pt-2">

            <span class="text-xl font-bold text-slate-800">

                Total

            </span>

            <span
                id="total"
                class="text-2xl font-bold text-cyan-600">

                $ 0

            </span>

        </div>

    </div>

    {{-- Inputs ocultos que se enviarán al controlador --}}
    <input
        type="hidden"
        name="subtotal_venta"
        id="subtotal_input"
        value="0">

    <input
        type="hidden"
        name="iva"
        id="iva_input"
        value="0">

    <input
        type="hidden"
        name="total_venta"
        id="total_input"
        value="0">

    <div class="flex justify-end gap-3 mt-8">

        <x-button
            type="button"
            variant="neutral"
            onclick="cerrarModal('modal-create-venta')">

            Cancelar

        </x-button>

        <x-button
            type="submit"
            variant="create">

            Registrar Venta

        </x-button>

    </div>

</div>