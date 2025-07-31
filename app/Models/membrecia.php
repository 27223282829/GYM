<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membrecia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_clientes',
        'tipo',
        'fecha_ini',
        'fecha_fin',
        'estado',
    ];

    protected $casts = [
        'fecha_ini' => 'date',
        'fecha_fin' => 'date',
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_clientes');
    }
}
