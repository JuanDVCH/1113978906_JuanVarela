<div
    id="{{ $id }}"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 p-4">

    <div
        class="bg-white rounded-2xl shadow-2xl w-full max-w-6xl max-h-[90vh] flex flex-col">

        {{-- Header --}}
        <div class="flex items-center justify-between border-b p-6">

            <h2 class="text-2xl font-bold">

                {{ $title }}

            </h2>

            <button
                type="button"
                onclick="cerrarModal('{{ $id }}')"
                class="text-2xl text-slate-500 hover:text-red-500">

                &times;

            </button>

        </div>

        {{-- Contenido con scroll --}}
        <div class="flex-1 overflow-y-auto p-6">

            {{ $slot }}

        </div>

    </div>

</div>