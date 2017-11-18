<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";

    protected $fillable = [
        'nombre', 'apellido1', 'apellido2','telefono','direccion','email','ci','activo'
    ];

    public function reserva() {
        return $this->hasMany('Reservas', 'id_cliente');
    }
}
