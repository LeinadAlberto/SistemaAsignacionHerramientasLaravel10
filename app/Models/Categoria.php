<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /* Una Categoría tiene muchas Herramientas */
    public function herramientas()
    {
        return $this->hasMany(Herramienta::class);
    }
}
