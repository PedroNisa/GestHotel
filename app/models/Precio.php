<?php

class Precio extends Eloquent {

    /*
    * A cada modelo se le asocia la tabla correspondiente en la base de datos
    * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
    * Al tipo de relación le pasamos dos parámetros:
    * el primero pertenece al modelo al que está asociado y el
    * segundo indica el campo enlazado a este modelo. 
    */

   
    protected $table = 'precio';

    //un tipo de habitación puede tener precios asociados
    public function tipoHabitacion() {
        return $this->belongsTo('TipoHabitacion', 'id');
    }
    //la moneda estará asociada a algún precio
    public function moneda() {
         return $this->belongsTo('Moneda','id');
    }

}
