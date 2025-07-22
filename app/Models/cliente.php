<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class cliente extends Model
{
    use HasFactory;

    public function trabajador(): BelongsTo{
        return $this->belongsTo(Trabajador::class, 'id_trabajador', 'id');
    }
}
