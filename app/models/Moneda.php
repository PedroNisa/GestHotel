<?php

class Moneda extends Eloquent {

    /*
    * A cada modelo se le asocia la tabla correspondiente en la base de datos
    * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
    * Al tipo de relación le pasamos dos parámetros:
    * el primero pertenece al modelo al que está asociado y el
    * segundo indica el campo enlazado a este modelo. 
    */


   
    protected $table = 'moneda';

    //la moneda puede estar asociada en varios precios
    public function precio() {
        return $this->hasMany('Precio','id_moneda');
    }

}
