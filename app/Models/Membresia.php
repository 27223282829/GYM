<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'membresias';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'tipo',
        'fecha_ini',
        'fecha_fin',
        'estado'
    ];

    // Relación: una membresía pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
