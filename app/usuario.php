<?php

namespace Venta;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $table = 'usuarios';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'clave',
        'estado',
    ];
}
