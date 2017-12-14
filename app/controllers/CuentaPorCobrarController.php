<?php

class CuentaPorCobrarController extends \BaseController {

    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }
    
    //función para guardar los datos devueltos tras realizar una entrega a cuenta
    //retorna la vista reservas con los datos nuevos
    public function guardar($id_reserva) {
        $objReserva = Reserva::find($id_reserva);
        $monto = ($objReserva->total - $this->getMonto($objReserva));
        $objCuentaPC = new CuentaPorCobrar();
        $objCuentaPC->fecha = date('Y-m-d H:i:s');
        $objCuentaPC->monto = $monto;
        $objCuentaPC->estado = '1';
        $objCuentaPC->activo = '1';
        $objCuentaPC->id_reserva = $objReserva->id;
        $objCuentaPC->id_cliente = $objReserva->id_cliente;
        $objCuentaPC->save();
        return View::make('Reservas.confirmado')->with('Reserva', $objReserva);
    }
    
    //recupera el total adeudado
    private function getMonto($objReserva) {
        $monto = 0;
        if (count($objReserva->pago) > 0) {
            foreach ($objReserva->pago as $rowP) {
                $monto+=$rowP->monto;
            }
        }
        return $monto;
    }

}
