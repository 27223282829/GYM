<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['rol'];

    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class, 'id_rol');
    }
}
