<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";

    protected $fillable = [
        'nombre', 'apellidoP', 'apellidoM','telefono','direccion','email','ci','activo'
    ];

    public function reserva() {
        return $this->hasMany('Reserva', 'id_cliente');
    }
}
