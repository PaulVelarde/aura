<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Proyecto Laravel')</title>

    <!-- Estilos -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/flyonui/flyonui.js'])

</head>

<body class="bg-gray-100 font-sans antialiased">
    
    <!-- Barra de navegación -->
    @include('components.navbar')

    <!-- Contenido principal -->
    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Pie de página -->
    @include('components.footer')

    <!-- Scripts -->
    <script>
        // Ejemplo de funcionalidad para el menú móvil
        document.getElementById('menu-toggle')?.addEventListener('click', function () {
            const menu = document.querySelector('nav ul');
            menu?.classList.toggle('hidden');
        });
    </script>
</body>
</html>
