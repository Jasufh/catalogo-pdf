<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "producto";

    public function catalogos()
    {
        return $this->belongsToMany(Catalogo::class, 'catalogo_producto');
    }
}
