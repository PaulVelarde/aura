<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-2xl font-bold">
                <a href="/" class="hover:text-blue-300">Gestión de Biblioteca</a>
            </h1>

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
        <h1 class="text-3xl font-bold mb-4">Libros</h1>

        <table class="bg-white w-full rounded shadow mb-4">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-4 text-left">Título</th>
                    <th class="p-4 text-left">Autor</th>
                    <th class="p-4 text-left">Año</th>
                    <th class="p-4 text-left">Género</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td class="p-4">{{ $libro->titulo }}</td>
                        <td class="p-4">{{ $libro->autor }}</td>
                        <td class="p-4">{{ $libro->anio_publicacion }}</td>
                        <td class="p-4">{{ $libro->genero->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('libros.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            <h2 class="text-xl font-bold mb-4">Agregar nuevo libro</h2>
            <input type="text" name="titulo" placeholder="Título" required class="border p-2 w-full mb-4">
            <input type="text" name="autor" placeholder="Autor" required class="border p-2 w-full mb-4">
            <input type="number" name="anio_publicacion" placeholder="Año de publicación" required
                class="border p-2 w-full mb-4">

            <select name="genero_id" required class="border p-2 w-full mb-4">
                <option value="">Seleccionar género</option>
                @foreach ($generos as $genero)
                    <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                @endforeach
            </select>

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
