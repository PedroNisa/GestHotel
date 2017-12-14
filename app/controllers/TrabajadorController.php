<?php

class TrabajadorController extends \BaseController {

    // Array con las validaciones para formularios trabajador
    private $rules = array(
        'nombre' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'apellido1' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'apellido2' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'dni' => 'required|regex:/^[0-9]{7,8}[A-Z]+$/',
        'telefono' =>['required','regex:/^[9|6|7][0-9]{8}$/'],
        'email' => 'required|email|unique:trabajador,id'
    );

    public function __construct() {
        //filtra usuarios no logueados
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
        //filtra usuarios logueados no autorizados
        $this->beforeFilter('adminCont');
    }

    //devuelve el objeto a la vista que muestra el listado de trabajadores
    public function index() {
        $ObjTrabajador = Trabajador::where('id', '!=', '1')->orderBy('nombre', 'asc')->get();
        return View::make('Trabajador.index')->with('Trabajador', $ObjTrabajador);
    }

    //devuelve la vista con el formulario para crear un nuevo trabajador
    public function create() {
        return View::make('Trabajador.create');
    }

    //guarda los datos introduccidos en el formulario Nuevo Trabajador
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        //si pasa el validador
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjTrabajador = new Trabajador;
            $ObjTrabajador->nombre = $input['nombre'];
            $ObjTrabajador->apellido1 = $input['apellido1'];
            $ObjTrabajador->apellido2 = $input['apellido2'];
            $ObjTrabajador->telefono = $input['telefono'];
            $ObjTrabajador->direccion = $input['direccion'];
            $ObjTrabajador->provincia = $input['provincia'];
            $ObjTrabajador->pais = $input['pais'];
            $ObjTrabajador->dni = $input['dni'];
            $ObjTrabajador->email = $input['email'];
            $ObjTrabajador->activo = 1;
            $ObjTrabajador->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista los trabajadores
            return Redirect::to('administracion/trabajador');
        } else {//si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    // devuelve el objeto a la vista que lista el trabajador pasado por parámetro
    public function show($id) {
        $ObjTrabajador = Trabajador::find($id);
        return View::make('Trabajador.show')->with('Trabajador', $ObjTrabajador);
    }

    //devuelve el objeto a la vista para editar el trabajador pasado por parámetro
    public function edit($id) {
        $ObjTrabajador = Trabajador::find($id);
        return View::make('Trabajador.edit')->with('Trabajador', $ObjTrabajador);
    }

    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjTrabajador = Trabajador::find($id);
            $ObjTrabajador->nombre = $input['nombre'];
            $ObjTrabajador->apellido1 = $input['apellido1'];
            $ObjTrabajador->apellido2 = $input['apellido2'];
            $ObjTrabajador->telefono = $input['telefono'];
            $ObjTrabajador->direccion = $input['direccion'];
            $ObjTrabajador->provincia = $input['provincia'];
            $ObjTrabajador->pais = $input['pais'];
            $ObjTrabajador->dni = $input['dni'];
            $ObjTrabajador->email = $input['email'];
            $ObjTrabajador->activo = 1;
            $ObjTrabajador->save();
            return Redirect::to('administracion/trabajador');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
//elimina el trabajador pasado por parámetro
    public function destroy($id) {
        $ObjTrabajador = Trabajador::find($id);
        $ObjTrabajador->delete();
        return Redirect::to('administracion/trabajador');
    }

}
