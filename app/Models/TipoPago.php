<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;

    protected $table = 'tipo_pagos';

    protected $fillable = ['tipo_de_pagos'];

    // Relación inversa
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_tipo_pago');
    }
}
