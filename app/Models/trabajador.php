<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
 protected $table = 'trabajadors'; // 👈 Laravel usaría 'trabajadors' igual, pero mejor especificarlo
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'id_rol'];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
