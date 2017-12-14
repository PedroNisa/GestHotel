<?php

class ReservaController extends \BaseController {

    // Array con las validaciones para formularios de la vista Reserva
    private $rules = array(
        'fecha_entrada' => 'Required',
        'fecha_salida' => 'Required',
        'total' => 'Required|numeric',
        'id_cliente' => 'Required',
        'id_habitacion' => 'Required',
        'id_precio' => 'Required'
    );
    private $concepto = array(
        'pendiente' => 'Queda Saldo pendiente de Cobro',
        'cancelado' => 'Sin cobros pendientes'
    );

    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    //retorna el objeto a la vista con el listado de reservas
    public function index() {
        return View::make('Reservas.index');
    }

    //devuelve el objeto a la vista del detalle de la habitación pasada por parámetro en la vista que crea una nueva reserva
    public function show($id) {
        $ObjHabitacion = Habitacion::find($id);
        return View::make('Reservas.detail')->with('Habitacion', $ObjHabitacion);
    }

    //devuelve la vista con las habitaciones disponibles
    public function create() {
        return View::make('Reservas.create');
    }

    public function store() {
        //
    }

    //funcion que implementa una transacción para una consulta de tipo query
    public function saveReservation() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        //si pasa el validador
        if (!$validation->fails()) {
            //creamos una transacción sobre sobre el conjunto de operaciones, así nos aseguramos que si algo pasa
            //se desharían todos los cambios aplicados hasta ese momento de forma automática.
            DB::transaction(function() use ($input) {
                $id_reserva = $this->saveRserva($input);
                $this->saveHabitacionReserva($input['id_habitacion'], $id_reserva, $input['id_precio']);
                $this->uploadEstadoHabitacion($input['id_habitacion']);
                if ($input['monto'] > 0) {
                    $this->savePago($input, $id_reserva);
                }
            });
            //si toda a ido bien retornamos la vista con el listado de habitaciones reservadas
            return Redirect::to('reservaciones');
        } else {
            //en caso contrario mostramos los errores
            $ObjHabitacion = Habitacion::find($input['id_habitacion']);
            return Redirect::to('reservaciones/' . $input['id_habitacion'])->with('Habitacion', $ObjHabitacion)->withErrors($validation)->withInput();
//            return View::make('Reservas.detail')->with('Habitacion', $ObjHabitacion)->withErrors($validation);
        }
    }

    public function edit($id) {
        
    }

    public function update($id) {
        
    }

    public function destroy($id) {
        
    }

    //guarda los datos del formulario de la modal nueva reserva
    private function saveRserva($input) {
        $ObjReserva = new Reserva();
        $ObjReserva->fecha = date('Y-m-d H:i:s');
        $ObjReserva->fecha_entrada = $input['fecha_entrada'] . ' ' . date('H:i:s');
        $ObjReserva->fecha_salida = $input['fecha_salida'] . ' 15:00:00';
        $ObjReserva->descripcion = $input['descripcion'];
        $ObjReserva->estado_pago = $input['saldo'] > 0 ? 'PENDIENTE' : 'CANCELADO';
        $ObjReserva->dias = $input['dias'];
        $ObjReserva->total = $input['total'];
        $ObjReserva->activo = 1;
        $ObjReserva->id_trabajador = Auth::user()->id;
        $ObjReserva->id_cliente = $input['id_cliente'];
        $ObjReserva->save();
        return $ObjReserva->id;
    }

    private function saveHabitacionReserva($id_habitacion, $id_reserva, $id_precio) {
        $ObjHabitacionReserva = new HabitacionReserva();
        $ObjHabitacionReserva->id_precio = $id_precio;
        $ObjHabitacionReserva->id_reserva = $id_reserva;
        $ObjHabitacionReserva->id_habitacion = $id_habitacion;
        $ObjHabitacionReserva->save();
    }

    //guarda el pago anticipado en el momento de crear la reserva
    private function savePago($input, $id_reserva) {
        $ObjPago = new Pago();
        $ObjPago->fecha = date('Y-m-d H:i:s');
        $ObjPago->monto = $input['monto'];
        $ObjPago->concepto = $input['saldo'] > 0 ? $this->concepto['pendiente'] : $this->concepto['cancelado'];
        $ObjPago->activo = 1;
        $ObjPago->id_reserva = $id_reserva;
        $ObjPago->id_moneda = $input['id_moneda'];
        $ObjPago->save();
    }

    //devuelve el estado de pago en el que se encuentra la habitación pasada por parámetro
    private function uploadEstadoHabitacion($id_habitacion) {
        $ObjHabitacion = Habitacion::find($id_habitacion);
        $ObjHabitacion->estado = 'OCUPADA';
        $ObjHabitacion->save();
    }

    //devuelve el objeto al modal para el pago parcial o total de la deuda del cliente
    public function realizarCobro($id_reserva) {
        $objReserva = Reserva::find($id_reserva);
        return View::make('Reservas.cobrar')->with('Reserva', $objReserva);
    }

    //devuelve la vista con el listado de las reserva tras realizar un pago total o parcial
    public function confirmarCobro($id_reserva) {
        $objReserva = Reserva::find($id_reserva);
        //recupera tddos los campos
        $input = Input::all();
        //si el cliente sigue debiendo algo
        if (count($objReserva->pago) > 0) {
            $input['id_moneda'] = $objReserva->pago->first()->id_moneda;
        }//guardamos la cantidad para mostrala en la vista de reservas
        $input['saldo'] = ($input['total'] - ($input['monto'] + $input['monto-cuenta']));
        //ejecutamos el conjunto de sentencias dentro de la transación
        DB::transaction(function() use ($input, $id_reserva) {
            $this->savePago($input, $id_reserva);
            //si el monto pendiente a quedado a 0
            if ($input['saldo'] <= 0) {
                //cambiamos el estado dela reserva
                $this->uploadEstadoPagoReserva($id_reserva);
            }
        });
        $newObjReserva = Reserva::find($id_reserva);
        //retornamos a la vista los datos guardados del modal
        return View::make('Reservas.confirmado')->with('Reserva', $newObjReserva);
    }

    //si el cliente no debe nada, guardamos el estado del pago de la reserva como CANCELADO
    public function uploadEstadoPagoReserva($id_reserva) {
        $objReserva = Reserva::find($id_reserva);
        $objReserva->estado_pago = 'CANCELADO';
        $objReserva->save();
    }

    //liberaMos la habitacion para que pase a LIBRE
    public function liberar($id_reserva) {
        DB::transaction(function() use ($id_reserva) {
            $reserva = Reserva::find($id_reserva);
            $reserva->activo = '0';
            $reserva->save();
            $Habitacion = Habitacion::find($reserva->habitacionReserva->id_habitacion);
            $Habitacion->estado = 'LIBRE';
            $Habitacion->save();
            echo 'ok';
        });
    }

}
