<!DOCTYPE html>
<html lang="es">

<head>
    @include('components.head')
</head>

<body class="min-h-screen flex flex-col bg-slate-100">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Contenido principal --}}
    <div class="flex flex-1">

        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Contenido de cada página --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>