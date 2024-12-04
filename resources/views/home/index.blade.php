@extends('layouts.app')

@section('title', 'Inicio - Aura Noticias')

@section('content')

<!-- Banner Principal con Noticias Destacadas -->
<div class="relative h-screen bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
    <!-- Fondo estático -->
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>

    <!-- Contenedor de imágenes superpuestas -->
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <!-- Fondo estático -->
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
        <!-- Contenedor de imágenes superpuestas -->
        <div class="relative z-10 flex justify-center items-center h-full">
            @if(isset($ultimasNoticias[0]))  <!-- Cambiar de $newsItems a $ultimasNoticias -->
            <!-- Imagen 1: Primera Noticia -->
            <div class="group relative w-[46%] h-[67%] transition-all duration-500 ease-in-out transform hover:z-30 hover:scale-125 hover:shadow-2xl hover:border-4 hover:border-white"
                style="background-image: url('img/{{ $ultimasNoticias[0]->image }}'); background-size: cover; background-position: center; margin-right: -6%; border-radius: 15px;">
                <a href="{{ route('news.show', $ultimasNoticias[0]->idnoticias) }}" class="absolute inset-0">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 rounded-lg">
                        <h1 class="text-white text-lg font-bold">{{ $ultimasNoticias[0]->titular }}</h1>
                        
                    </div>
                </a>
            </div>
            @endif
    
            @if(isset($ultimasNoticias[1]))  <!-- Cambiar de $newsItems a $ultimasNoticias -->
            <!-- Imagen 2: Segunda Noticia -->
            <div class="group relative w-[47%] h-[69%] transition-all duration-500 ease-in-out transform group-hover:scale-85 hover:z-30 hover:scale-125 hover:shadow-2xl hover:border-4 hover:border-white"
                style="background-image: url('img/{{ $ultimasNoticias[1]->image }}'); background-size: cover; background-position: center; border-radius: 15px;">
                <a href="{{ route('news.show', $ultimasNoticias[1]->idnoticias) }}" class="absolute inset-0">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 rounded-lg">
                        <h1 class="text-white text-lg font-bold">{{ $ultimasNoticias[1]->titular }}</h1>
                    </div>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Sección de Noticias Destacadas -->
<div class="container mx-auto p-4">
    <div class="grid grid-cols-4 gap-4">
        <!-- Sección Principal: Noticias -->
        <div class="col-span-3">
            <div id="noticias-container" class="grid grid-cols-1 gap-4">
                @foreach ($ultimasNoticias->chunk(5) as $pageIndex => $noticiasChunk)
                    <div class="noticia-pagina {{ $pageIndex === 0 ? 'block' : 'hidden' }}">
                        @foreach ($noticiasChunk as $noticia)
                            <div class="w-3/4 mx-auto">
                                <div class="card sm:card-side">
                                    <figure>
                                        <img src="img/{{ $noticia->image }}" alt="news-image" class="w-full  object-cover rounded-t-lg" />
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title mb-2.5">{{ $noticia->titular }}</h5>
                                        <p class="mb-3">{{ Str::limit($noticia->contenido, 100) }}</p>
                                        <div class="card-actions">
                                            <a href="{{ route('news.show', $noticia->idnoticias) }}" class="btn btn-primary">Leer más</a>
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
                    <button class="pagination-btn btn {{ $pageIndex === 0 ? 'btn-primary' : 'btn-secondary' }}" 
                            data-page="{{ $pageIndex }}">
                        {{ $pageIndex + 1 }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Barra Lateral: Noticias de Facebook -->
        <div class="col-span-1">
            <h5 class="text-lg font-bold mb-4">Últimas de Facebook</h5>
            @foreach ($facebookLinks as $noticiaFacebook)
            <div class="facebook-embed">
                {!! $noticiaFacebook->url !!}
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
