<div class="bg-slate-50 border border-slate-200 rounded-xl p-6">

    <h2 class="text-lg font-semibold text-slate-800 mb-6">

        Información del Cliente

    </h2>

    <x-form.select name="id_cliente" label="Cliente" id="id_cliente" required>

        <option value="">Seleccione un cliente...</option>

        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id_cliente }}">

                @if ($cliente->tipo_cliente == 'Natural')
                    {{ $cliente->nombre_cliente }}
                    - CC: {{ $cliente->cedula }}
                @else
                    {{ $cliente->razon_social }}
                    - NIT: {{ $cliente->nit }}
                @endif

            </option>
        @endforeach

    </x-form.select>

</div>
