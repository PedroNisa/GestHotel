<?php

class PrecioController extends \BaseController {

    //elimina el precio pasado por parametro de alguna habitación
    public function deletePrecio($idprecio) {
        $ObjPrecio = Precio::find($idprecio);        
        if ($ObjPrecio->delete()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

}
