<?php

class TipoUsuario extends Eloquent {

    /*
    * A cada modelo se le asocia la tabla correspondiente en la base de datos
    * Para crear las relaciones, creamos funciones que devuelven el tipo de relación.
    * Al tipo de relación le pasamos dos parámetros:
    * el primero pertenece al modelo al que está asociado y el
    * segundo indica el campo enlazado a este modelo. 
    */

    
    protected $table = 'tipo_usuario';
    
    //un rol puede estar asociado a varios usuarios
    public function usuario() {
        return $this->hasMany('Usuario');
    }

}
