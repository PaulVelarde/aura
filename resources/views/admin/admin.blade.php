@extends('layouts.app')

@section('title', 'Inicio - Aura Noticias')

@section('content')

    <!-- Banner Principal con Noticias Destacadas -->


    <!-- Sección de Noticias Destacadas -->

    <div>

    </div>

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
