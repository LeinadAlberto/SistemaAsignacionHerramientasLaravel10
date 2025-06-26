<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /* Una herramienta puede ser asignada múltiples veces (en diferentes periodos) */
    public function asignaciones()
    {
        return $this->hasMany(Asignacion::class);
    }
}
