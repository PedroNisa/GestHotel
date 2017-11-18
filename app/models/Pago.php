<?php

class Pago extends Eloquent {

    protected $table = 'pago';

    public function reserva() {
        return $this->belongsTo('Reservas', 'id');
    }

}
