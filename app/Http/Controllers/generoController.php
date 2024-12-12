<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class generoController extends Controller
{

    public function index()
    {
        $generos = Genero::all();
        return view('libros.listarGenero', compact('generos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:generos,nombre',
        ]);

        Genero::create([
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->route('generos.index')->with('success', 'Género creado con éxito.');
    }
}
