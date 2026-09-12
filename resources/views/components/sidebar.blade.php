<aside id="sidebar" class="w-64 bg-slate-800 text-white flex flex-col transition-all duration-300">

    {{-- HEADER --}}
    <div class="flex items-center justify-between p-4 border-b border-slate-700">

        <span class="text-lg font-semibold">MENÚ</span>

        {{-- BOTÓN TOGGLE --}}
        <button id="toggleSidebar" class="p-2 rounded-lg hover:bg-slate-700 transition lg:hidden">
            ☰
        </button>

    </div>

    {{-- NAV --}}
    <ul class="flex flex-col mt-2">

        {{-- INICIO --}}
        <li>
            <a href="{{ route('inicio') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition
                {{ request()->routeIs('inicio')
                    ? 'bg-cyan-600 text-white'
                    : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 9.75L12 4l9 5.75V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.75z" />
                </svg>

                <span>Inicio</span>
            </a>
        </li>

        {{-- CLIENTES --}}
        <li>
            <a href="{{ route('clientes.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition
                {{ request()->routeIs('clientes.*')
                    ? 'bg-cyan-600 text-white'
                    : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h5V4H2v16h5m10 0v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4m10 0H7m10-10H7m10-4H7" />
                </svg>

                <span>Clientes</span>
            </a>
        </li>
        {{-- PRODUCTOS --}}
        <li>
            <a href="{{ route('productos.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition
        {{ request()->routeIs('productos.*')
            ? 'bg-cyan-600 text-white'
            : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20 7L12 3 4 7m16 0v10l-8 4m8-14-8 4m-8-4v10l8 4m-8-14 8 4m0 10V11" />
                </svg>

                <span>Productos</span>
            </a>
        </li>

        {{-- VENTAS --}}
        <li>
            <a href="{{ route('ventas.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg transition
        {{ request()->routeIs('ventas.*')
            ? 'bg-cyan-600 text-white'
            : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 7h18M6 3h12l1 4H5l1-4zM5 11h14l-1.2 8.4a2 2 0 01-2 1.6H8.2a2 2 0 01-2-1.6L5 11zm4 4h6" />

                </svg>

                <span>Ventas</span>

            </a>
        </li>
    </ul>
</aside>
