<?php

class Cliente extends Eloquent {

    protected $table = 'cliente';

    public function reserva() {
        return $this->hasMany('Reservas', 'id_cliente');
    }

}
