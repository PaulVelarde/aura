<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'autor', 'anio_publicacion', 'genero_id'];

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
