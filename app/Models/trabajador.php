<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{

    // protected $table = 'trabajadores';

    use HasFactory;
    protected $table = 'trabajadors'; // 👈 Laravel usaría 'trabajadors' igual, pero mejor especificarlo
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'id_rol'];


    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');

    }
}
// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

// class trabajador extends Model
// {
// <<<<<<< HEAD

//     protected $table = 'trabajadores';

//     use HasFactory;

//     public function rol(): BelongsTo
//     {     
//         return $this->belongsTo(Roles::class, 'id_rol', 'id');
// =======
//     use HasFactory;

//     public function rol(): BelongsTo {
//         return $this->belongsTo(Rol::class, 'id_rol', 'id');
// >>>>>>> b510957 (Integrar el dashboard al proyecto)
//     }
// }
