<?php
namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\RedVideo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    // Última noticia subida
    $ultimaNoticia = Noticia::latest('created_at')->first();

    // Últimas 10 noticias para los cards
    $ultimasNoticias = Noticia::latest()->get();

    // Links de Facebook (últimos 5 ordenados por fecha de creación)
    $facebookLinks = RedVideo::where('plataforma', 'Facebook')
                              ->orderBy('created_at', 'desc')
                              ->take(5)
                              ->get();

    // Links de Instagram
    $instagramLinks = RedVideo::where('plataforma', 'Instagram')->get();

    // Reels o shorts de TikTok
    $tikTokReels = RedVideo::where('plataforma', 'TikTok')
                                ->orderBy('created_at', 'desc')
                                ->take(5)
                                ->get();

    // Pasar las variables correctamente a la vista
    return view('home.index', compact(
        'ultimaNoticia',
        'ultimasNoticias',
        'facebookLinks',
        'instagramLinks',
        'tikTokReels'
    ));
}

}
