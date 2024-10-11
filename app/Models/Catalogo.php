<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;

    protected $table = 'catalogo';

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'catalogo_producto');
    }

}
