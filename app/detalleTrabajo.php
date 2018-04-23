<?php

namespace Venta;

use Illuminate\Database\Eloquent\Model;

class detalleTrabajo extends Model
{
    //
    protected $table = 'detallesTrabajos';

    protected $primaryKey = 'id';
    
    public $timestamps = false;

    protected $fillable = [
        'idOrdenTrabajo',
        'cantidad',
        'descripcion',
        'precio',
    ];
    
}
