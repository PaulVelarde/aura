<?php

namespace App\Http\Controllers;

use App\Models\libros;
use App\Models\Genero;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index()
    {
        $libros = libros::with('genero')->get();
        $generos = Genero::all();
        return view('libros.listarLibro', compact('libros', 'generos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'anio_publicacion' => 'required|integer',
            'genero_id' => 'required|exists:generos,id',
        ]);

        libros::create($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro creado con éxito.');
    }
}
