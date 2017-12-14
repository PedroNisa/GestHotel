<?php

class Habitacion extends Eloquent {

    /*
    * A cada modelo se le asocia la tabla correspondiente en la base de datos
    * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
    * Al tipo de relación le pasamos dos parámetros:
    * el primero pertenece al modelo al que está asociado y el
    * segundo indica el campo enlazado a este modelo. 
    */


   
    protected $table = 'habitacion';

    //un tipo de habitación tendrá varias habitaciones
    public function tipoHabitacion() {
        return $this->belongsTo('TipoHabitacion', 'id_tipo_habitacion');
    }

    //cada habitacion solo podra tener una reserva
    public function habitacionReserva() {
        return $this->hasOne('HabitacionReserva', 'id_habitacion');
    }

}
