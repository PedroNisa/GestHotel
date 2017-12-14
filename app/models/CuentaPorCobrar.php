<?php

class CuentaPorCobrar extends Eloquent {
    
       /*
        * A cada modelo se le asocia la tabla correspondiente en la base de datos
        * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
        * Al tipo de relación le pasamos dos parámetros:
        * el primero pertenece al modelo al que está asociado y el
        * segundo indica el campo enlazado a este modelo. 
        */
    protected $table = 'cuenta_por_cobrar';

    //las reservas tendran cuentas por cobrar
    public function reserva() {
        return $this->belongsTo('Reservas', 'id');
    }

}
