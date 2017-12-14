<?php

class TipoHabitacionController extends \BaseController {
    // Array con las validaciones para formularios tipo de habitación
    private $rules = array(
        'nombre' => 'required',
        'descripcion' => 'required'
    );
    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
        //filtra usuarios logueados no autorizados
        $this->beforeFilter('adminCont');
    }

    //devuelve el objeto a la vista con el listado de tipologias de habitaciones
    public function index() {
        $ObjTipoHabitacion = TipoHabitacion::all();
        return View::make('TipoHabitacion.index')->with('TipoHabitacion', $ObjTipoHabitacion);
    }

    //devuelve la vista con el formulario para crear una nueva tipologia
    public function create() {
        return View::make('TipoHabitacion.create');
    }
//guarda los datos introduccidos en el formulario Nuevo Tipo de Habitación
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        //si pasa el validador
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjTipoHabitacion = new TipoHabitacion;
            $ObjTipoHabitacion->nombre = $input['nombre'];
            $ObjTipoHabitacion->descripcion = $input['descripcion'];
            $ObjTipoHabitacion->save();
            //guarda los datos de los precios de la habitacion
            for ($i = 1; $i <= $input['prices']; $i++) {
                $objPrecio = new Precio;
                $objPrecio->monto = $input['monto' . $i];
                $objPrecio->personas = $input['personas' . $i];
                $objPrecio->id_moneda = $input['id_moneda' . $i];
                $objPrecio->id_tipo_habitacion = $ObjTipoHabitacion->id;
                $objPrecio->save();
            }
            //si se han guardado los datos correctamente nos devuelve la vista que lista los tipos de habitaciones
            return Redirect::to('administracion/tipo-habitacion');
        } else {
            //si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
     //devuelve el objeto a la vista para editar el tipo pasado por parámetro
    public function edit($id) {
        $ObjTipoHabitacion = TipoHabitacion::find($id);
        return View::make('TipoHabitacion.edit')->with('TipoHabitacion', $ObjTipoHabitacion);
    }

    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjTipoHabitacion = TipoHabitacion::find($id);
            $ObjTipoHabitacion->nombre = $input['nombre'];
            $ObjTipoHabitacion->descripcion = $input['descripcion'];
            $ObjTipoHabitacion->save();
            for ($i = 1; $i <= $input['prices']; $i++) {
                if (isset($input['id_precio' . $i])) {
                    $objPrecio = Precio::find($input['id_precio' . $i]);
                } else {
                    $objPrecio = new Precio;
                }
                $objPrecio->monto = $input['monto' . $i];
                $objPrecio->personas = $input['personas' . $i];
                $objPrecio->id_moneda = $input['id_moneda' . $i];
                $objPrecio->id_tipo_habitacion = $ObjTipoHabitacion->id;
                $objPrecio->save();
            }
            return Redirect::to('administracion/tipo-habitacion');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
    //elimina el tipo pasado por parámetro
    public function destroy($id) {
        $ObjTipoHabitacion = TipoHabitacion::find($id);
        $ObjTipoHabitacion->delete();
        return Redirect::to('administracion/tipo-habitacion');
    }

}
