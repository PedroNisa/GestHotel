<?php

class HabitacionController extends \BaseController {

    // Array con las validaciones para el formulario
    private $rules = array(
        'nro' => 'required|numeric|unique:habitacion|digits:3',
        'id_tipo_habitacion' => 'required'
    );

    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    //devuelve el objeto a la vista con el listado de habitaciones
    public function index() {
        $ObjHabitacion = Habitacion::orderby('id_tipo_habitacion', 'asc')->get();
        return View::make('Habitacion.index')->with('Habitacion', $ObjHabitacion);
       
    }

    //devuelva la vista con el formulario para crear una nueva habitacion
    public function create() {
        return View::make('Habitacion.create');
    }


    //guarda los datos introduccidos en el formulario Nueva Habitación
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        //si pasa el validador
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjHabitacion = new Habitacion;
            $ObjHabitacion->nro = $input['nro'];
            $ObjHabitacion->estado = 'LIBRE';
            $ObjHabitacion->id_tipo_habitacion = $input['id_tipo_habitacion'];
            $ObjHabitacion->activo = 1;
            $ObjHabitacion->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista las habitaciones
            return Redirect::to('administracion/habitacion');
        } else {
            //si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    public function show($id) {
        $ObjHabitacion = Habitacion::find($id);
        return View::make('Habitacion.show')->with('Habitacion', $ObjHabitacion);
    }

    //devuelve el objeto a la vista para editar la habitación pasada por parámetro
    public function edit($id) {
        $ObjHabitacion = Habitacion::find($id);
        return View::make('Habitacion.edit')->with('Habitacion', $ObjHabitacion);
    }
    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $this->rules = array(
            'id_tipo_habitacion' => 'required'
        );
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjHabitacion = Habitacion::find($id);
            $ObjHabitacion->id_tipo_habitacion = $input['id_tipo_habitacion'];
            $ObjHabitacion->save();
            return Redirect::to('administracion/habitacion');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
    //elimina la habitación pasada por parámetro
    public function destroy($id) {
        $ObjHabitacion = Habitacion::find($id);
        $ObjHabitacion->delete();
        return Redirect::to('administracion/habitacion');
    }

}
