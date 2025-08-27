<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos'; // 👈 importante, para que use la tabla correcta
    protected $fillable = [
        'id_cliente',
        'id_factura',
        'id_tipo_pago',
        'fecha_pago',
    ];

    // 👇 Relaciones
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'id_factura');
    }

    public function tipoPago()
    {
        // 👈 nombre en singular y el campo foráneo correcto
        return $this->belongsTo(TipoPago::class, 'id_tipo_pago');
    }
}
