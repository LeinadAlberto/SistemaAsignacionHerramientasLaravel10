<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable = [
        'herramienta_id', 'usuario_id', 
        'fecha_inicio', 'fecha_fin', 
        'estado', 'observaciones'
    ];
    
    /* Pertenece a una Herramienta */
    public function herramienta()
    {
        return $this->belongsTo(Herramienta::class);
    }
    
    /* Cada asignación pertenece a un único usuario (el encargado del proyecto) */
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
