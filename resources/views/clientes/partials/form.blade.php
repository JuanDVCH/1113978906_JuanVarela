<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- TIPO DE CLIENTE --}}
    <x-form.select name="tipo_cliente" label="Tipo de Cliente" id="tipo_cliente">
        <option value="">Seleccione...</option>
        <option value="Natural">Natural</option>
        <option value="Empresa">Empresa</option>
    </x-form.select>

</div>

<div id="form-persona" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

    <x-form.input id="nombre_cliente" name="nombre_cliente" label="Nombre Completo" type="text"
        placeholder="Ingrese el nombre completo" />

    <x-form.input id="cedula" name="cedula" label="Cédula" type="text" placeholder="Ingrese la cédula" />

    <x-form.input id="razon_social" name="razon_social" label="Razón Social" type="text"
        placeholder="Ingrese la razón social" />

    <x-form.input id="nit" name="nit" label="NIT" type="text" placeholder="Ingrese el NIT" />

</div>
