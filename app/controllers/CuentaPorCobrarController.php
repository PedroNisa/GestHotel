<?php

class CuentaPorCobrarController extends \BaseController {

    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    public function guardar($id_reserva) {
        $objReserva = Reserva::find($id_reserva);
        $debe = ($objReserva->total - $this->getDebe($objReserva));
        $objCuentaPC = new CuentaPorCobrar();
        $objCuentaPC->fecha = date('Y-m-d H:i:s');
        $objCuentaPC->debe = $debe;
        $objCuentaPC->estado = '1';
        $objCuentaPC->activo = '1';
        $objCuentaPC->id_reserva = $objReserva->id;
        $objCuentaPC->id_cliente = $objReserva->id_cliente;
        $objCuentaPC->save();
        return View::make('Reserva.confirmado')->with('Reserva', $objReserva);
    }

    private function getDebe($objReserva) {
        $debe = 0;
        if (count($objReserva->pago) > 0) {
            foreach ($objReserva->pago as $rowP) {
                $debe+=$rowP->debe;
            }
        }
        return $monto;
    }

}
