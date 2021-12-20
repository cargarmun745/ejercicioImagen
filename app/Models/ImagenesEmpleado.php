<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenesEmpleado extends Model
{
    use HasFactory;
    
    protected $table = 'imagenes_empleados';
    
    public $timestamps = false;
    
    protected $fillable = ['tipoImagen','nomImagen','idempleado'];
    
    public function empleado (){
        return $this->belongsTo ('App\Models\Empleado', 'idempleado');
    }
}