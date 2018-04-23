<?php

namespace Venta;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $table = 'clientes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'telefono',
        'mail'
    ];
}
