<footer class="bg-slate-900 border-t border-slate-800 mt-auto">
    <div class="max-w-7xl mx-auto px-6 py-5">

        <div class="flex flex-col md:flex-row items-center justify-between gap-4">

            {{-- Información --}}
            <div class="text-center md:text-left">
                <h3 class="text-lg font-semibold text-white tracking-wide">
                    Sistema de Ventas
                </h3>

                <p class="text-sm text-slate-400">
                    Gestión eficiente de clientes, productos, ventas y facturación.
                </p>
            </div>

            {{-- Información del sistema --}}
            <div class="flex flex-wrap justify-center gap-6 text-sm text-slate-400">

                <div>
                    <span class="font-medium text-white">Versión:</span>
                    1.0.0
                </div>

                <div>
                    <span class="font-medium text-white">Framework:</span>
                    Laravel 12
                </div>

                <div>
                    <span class="font-medium text-white">Diseño:</span>
                    Tailwind CSS
                </div>

            </div>

        </div>

        <div class="border-t border-slate-800 mt-5 pt-4">

            <div class="flex flex-col md:flex-row items-center justify-between gap-2 text-sm text-slate-500">

                <span>
                    © {{ date('Y') }} Sistema de Ventas.
                </span>

                <span>
                    Desarrollado por <span class="text-cyan-400 font-medium">Juan David Varela</span>
                </span>

            </div>

        </div>

    </div>
</footer>
