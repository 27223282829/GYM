<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trabajador extends Model
{

    protected $table = 'trabajadores';

    use HasFactory;

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class, 'id_roles', 'id');
    }
}
