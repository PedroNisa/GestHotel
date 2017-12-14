<?php

class Reserva extends Eloquent {

    /*
     * A cada modelo se le asocia la tabla correspondiente en la base de datos
     * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
     * Al tipo de relación le pasamos dos parámetros:
     * el primero pertenece al modelo al que está asociado y el
     * segundo indica el campo enlazado a este modelo. 
     */

   
    protected $table = 'reserva';

    //un cliente puede reservas
    public function cliente() {
        return $this->belongsTo('Cliente', 'id');
    }

    //una reserva solo puede tener una habitación reservada
    public function habitacionReserva() {
        return $this->hasOne('HabitacionReserva', 'id_reserva');
    }

    //una reserva puede tener asociada varios pagos
    public function pago() {
        return $this->hasMany('Pago', 'id_reserva');
    }
    //una reserva puede tener varias cuentas por cobrar
    public function cuentaPorCobrar() {
        return $this->hasMany('CuentaPorCobrar', 'id_reserva');
    }

}
