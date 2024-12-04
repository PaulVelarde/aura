@extends('layouts.app')

@section('title', 'Inicio - Aura Noticias')

@section('content')

    <!-- Banner Principal con Noticias Destacadas -->


    <!-- Sección de Noticias Destacadas -->

    <body>
        <h1 style="color: black">Añadir Noticia</h1>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Añadir Noticia</h2>

                <!-- Campo Titular -->
                <div class="mb-4">
                    <label for="titular" class="block text-sm font-medium text-gray-700 mb-2">Titular:</label>
                    <input type="text" id="titular" name="titular" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Escribe el titular de la noticia">
                </div>

                <!-- Campo Contenido -->
                <div class="mb-4">
                    <label for="contenido" class="block text-sm font-medium text-gray-700 mb-2">Contenido:</label>
                    <textarea id="contenido" name="contenido" required rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Escribe el contenido de la noticia"></textarea>
                </div>

                <!-- Campo Imagen -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Imagen:</label>
                    <input type="file" id="image" name="image" accept="image/*" required
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>

                <!-- Botón de Enviar -->
                <div class="text-right">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Añadir Noticia
                    </button>
                </div>
            </div>

        </form>

        <!-- Sección Multimedia -->
        <div class="bg-gray-100 py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Multimedia</h2>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">


                </div>
            </div>
        </div>

    @endsection

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.pagination-btn');
            const pages = document.querySelectorAll('.noticia-pagina');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const pageIndex = button.getAttribute('data-page');

                    // Ocultar todas las páginas
                    pages.forEach(page => page.classList.add('hidden'));

                    // Mostrar la página seleccionada
                    pages[pageIndex].classList.remove('hidden');

                    // Actualizar estilos de los botones
                    buttons.forEach(btn => btn.classList.remove('btn-primary'));
                    button.classList.add('btn-primary');
                });
            });
        });
    </script>

</body>

</html>
