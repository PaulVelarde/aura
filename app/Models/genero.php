<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function libros()
    {
        return $this->hasMany(libros::class);
    }
}
