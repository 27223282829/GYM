<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'id_factura',
        'id_tipo_pago',
        'fecha_pago'
    ];

    // Relación con Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relación con Factura
    public function factura()
    {
        return $this->belongsTo(Factura::class, 'id_factura');
    }

    // Relación con Tipo de Pago
    public function tipoPago()
    {
        return $this->belongsTo(TipoPago::class, 'id_tipo_pago');
    }
}
