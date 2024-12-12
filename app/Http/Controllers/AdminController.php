<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Noticia;
use App\Models\RedesVideo;

class AdminController extends Controller
{
    // Guardar Noticia
    public function storeNoticia(Request $request)
    {
        $request->validate([
            'titular' => 'required|string|max:255',
            'contenido' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        // Guardar la imagen en el almacenamiento
        $imagePath = $request->file('image')->store('public/noticias');
        $imageUrl = Storage::url($imagePath);

        // Insertar la noticia
        Noticia::create([
            'titular' => $request->titular,
            'contenido' => $request->contenido,
            'fecha' => now(),
            'imagen' => $imageUrl,
        ]);

        return redirect()->back()->with('success', 'Noticia añadida exitosamente.');
    }

    // Guardar Video de Redes Sociales
    public function storeRedesVideo(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'URL' => 'required|url',
            'fuente' => 'required|string|in:facebook,instagram,youtube,tiktok,x',
        ]);

        // Insertar el video
        RedesVideo::create([
            'titulo' => $request->titulo,
            'url' => $request->URL,
            'plataforma' => $request->fuente,
            'fecha' => now(),
        ]);

        return redirect()->back()->with('success', 'Video añadido exitosamente.');
    }
}
