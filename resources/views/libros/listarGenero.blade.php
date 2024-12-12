<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Géneros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <header class="bg-blue-500 text-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Título del sitio -->
            <h1 class="text-2xl font-bold">
                <a href="/" class="hover:text-blue-300">Gestión de Biblioteca</a>
            </h1>

            <!-- Navegación -->
            <nav class="flex space-x-4">
                <a href="{{ route('generos.index') }}" class="hover:text-blue-300">
                    Géneros
                </a>
                <a href="{{ route('libros.index') }}" class="hover:text-blue-300">
                    Libros
                </a>
            </nav>
        </div>
    </header>
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-4">Géneros</h1>

        <!-- Listar géneros -->
        <ul class="mb-4">
            @foreach ($generos as $genero)
                <li class="bg-white p-4 rounded shadow mb-2">{{ $genero->nombre }}</li>
            @endforeach
        </ul>

        <!-- Crear género -->
        <form action="{{ route('generos.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            <h2 class="text-xl font-bold mb-4">Agregar nuevo género</h2>
            <input type="text" name="nombre" placeholder="Nombre del género" required
                class="border p-2 w-full mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mt-4">
                {{ session('success') }}
            </div>
        @endif
    </div>
</body>

</html>
