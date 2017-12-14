<?php

class TipoHabitacion extends Eloquent {

    /*
    * A cada modelo se le asocia la tabla correspondiente en la base de datos
    * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
    * Al tipo de relación le pasamos dos parámetros:
    * el primero pertenece al modelo al que está asociado y el
    * segundo indica el campo enlazado a este modelo. 
    */

    
    protected $table = 'tipo_habitacion';

    //un tipo de habitacion puede tener varias habitaciones asociadas
    public function habitacion() {
        return $this->hasMany('Habitacion');
    }
    //un tipo de habitacion puede contener varios precios
    public function precio() {
        return $this->hasMany('Precio','id_tipo_habitacion');
    }

}
