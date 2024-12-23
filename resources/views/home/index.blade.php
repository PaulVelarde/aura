@extends('layouts.app')

@section('title', 'Inicio - Aura Noticias')

@section('content')

<!-- Banner Principal con Noticias Destacadas -->
<div class="relative h-screen bg-gradient-to-br from-blue-600 via-purple-500 ">
    <!-- Contenedor de imágenes superpuestas -->
    <div class="relative z-10 flex justify-center items-center h-full space-x-6">
        @if(isset($ultimasNoticias[0]))
        <!-- Imagen 1: Primera Noticia -->
        <div class="group relative w-[46%] h-[67%] transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-2xl"
            style="border-radius: 15px;">
            <div class="relative w-full h-full bg-cover bg-center rounded-lg"
                style="background-image: url('img/{{ $ultimasNoticias[0]->image }}'); background-size: cover; border-radius: 15px;">
                <a href="{{ route('news.show', $ultimasNoticias[0]->idnoticias) }}" class="absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col justify-end p-4 rounded-lg">
                        <h1 class="text-white text-lg font-bold">{{ $ultimasNoticias[0]->titular }}</h1>
                    </div>
                </a>
            </div>
        </div>
        @endif

        @if(isset($ultimasNoticias[1]))
        <!-- Imagen 2: Segunda Noticia -->
        <div class="group relative w-[46%] h-[67%] transition-all duration-500 ease-in-out transform hover:scale-110 hover:shadow-2xl"
            style="border-radius: 15px;">
            <div class="relative w-full h-full bg-cover bg-center rounded-lg"
                style="background-image: url('img/{{ $ultimasNoticias[1]->image }}'); background-size: cover; border-radius: 15px;">
                <a href="{{ route('news.show', $ultimasNoticias[1]->idnoticias) }}" class="absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex flex-col justify-end p-4 rounded-lg">
                        <h1 class="text-white text-lg font-bold">{{ $ultimasNoticias[1]->titular }}</h1>
                    </div>
                </a>
            </div>
        </div>
        @endif
    </div>
</div>



<!-- Sección de Noticias Destacadas -->
<div class="container mx-auto p-4 bg-gray-100">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <!-- Sección Principal: Noticias -->
        <div class="lg:col-span-3">
            <div id="noticias-container" class="grid grid-cols-1 gap-6">
                @foreach ($ultimasNoticias->chunk(5) as $pageIndex => $noticiasChunk)
                    <div class="noticia-pagina {{ $pageIndex === 0 ? 'block' : 'hidden' }}">
                        @foreach ($noticiasChunk as $noticia)
                            <div class="mx-auto">
                                <div class="card flex flex-col sm:flex-row bg-white border border-gray-300 shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                                    <!-- Imagen -->
                                    <figure class="w-full sm:w-1/3">
                                        <img 
                                            src="img/{{ $noticia->image }}" 
                                            alt="news-image" 
                                            class="w-full h-48 sm:h-full object-cover"
                                        />
                                    </figure>
                                    <!-- Contenido -->
                                    <div class="card-body p-6 flex flex-col justify-between sm:w-2/3">
                                        <h5 class="card-title text-xl font-semibold mb-2 text-gray-800">{{ $noticia->titular }}</h5>
                                        <p class="text-gray-600 mb-3">{{ Str::limit($noticia->contenido, 100) }}</p>
                                        <div class="card-actions mt-4">
                                            <a 
                                                href="{{ route('news.show', $noticia->idnoticias) }}" 
                                                class="btn bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
                                                Leer más
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <!-- Navegación -->
            <div class="mt-6 flex justify-center space-x-2">
                @foreach ($ultimasNoticias->chunk(5) as $pageIndex => $noticiasChunk)
                    <button 
                        class="pagination-btn btn {{ $pageIndex === 0 ? 'btn-primary' : 'btn-secondary' }} border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                        {{ $pageIndex + 1 }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Barra Lateral: Noticias de Facebook -->
        <div class="lg:col-span-1 mx-auto">
            <h5 class="text-lg font-bold mb-4 text-gray-800">Últimas de Facebook</h5>
            @foreach ($facebookLinks as $noticiaFacebook)
                <div class="facebook-embed mb-4 bg-white border border-gray-300 shadow-md hover:shadow-lg rounded-lg overflow-hidden p-4">
                    <iframe 
                        src="https://www.facebook.com/plugins/post.php?href={{ urlencode($noticiaFacebook->url) }}&show_text=true&width=300" 
                        width="100%" 
                        height="400" 
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                </div>
            @endforeach
        </div>
    </div>
</div>


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
