<?php

namespace Venta;

use Illuminate\Database\Eloquent\Model;

class ordenTrabajo extends Model
{
    //ordenesTrabajos
    protected $table = 'ordenesTrabajos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'estado',
        'saldo',
        'entrega',
        'idCliente',
        'idUsuario',
        'idOrdenRelacionada',
        'idOrdenActualizada',
    ];
    
}
