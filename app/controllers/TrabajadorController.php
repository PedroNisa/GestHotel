<?php

class TrabajadorController extends \BaseController {

    private $rules = array(
        'nombre' => 'required|between:3,15|regex:/^[A-z][A-z\s\.\']+$/',
        'apellido1' => 'required|between:3,15|regex:/^[A-z][A-z\s\.\']+$/',
        'apellido2' => 'required|between:3,15|regex:/^[A-z][A-z\s\.\']+$/',
        'dni' => 'required|regex:/^[0-9]{7,8}[A-Z]+$/',
        'telefono' =>['required','regex:/^[9|6|7][0-9]{8}$/'],
        'email' => 'required|unique:cliente|email'
    );

    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    public function index() {
        $ObjTrabajador = Trabajador::where('id', '!=', '1')->orderBy('nombre', 'asc')->get();
        return View::make('Trabajador.index')->with('Trabajador', $ObjTrabajador);
    }

    public function create() {
        return View::make('Trabajador.create');
    }

    public function store() {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjTrabajador = new Trabajador;
            $ObjTrabajador->nombre = $input['nombre'];
            $ObjTrabajador->apellido1 = $input['apellido1'];
            $ObjTrabajador->apellido2 = $input['apellido2'];
            $ObjTrabajador->telefono = $input['telefono'];
            $ObjTrabajador->direccion = $input['direccion'];
            $ObjTrabajador->dni = $input['dni'];
            $ObjTrabajador->email = $input['email'];
            $ObjTrabajador->activo = 1;
            $ObjTrabajador->save();
            return Redirect::to('administracion/trabajador');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    public function show($id) {
        $ObjTrabajador = Trabajador::find($id);
        return View::make('Trabajador.show')->with('Trabajador', $ObjTrabajador);
    }

    public function edit($id) {
        $ObjTrabajador = Trabajador::find($id);
        return View::make('Trabajador.edit')->with('Trabajador', $ObjTrabajador);
    }

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
            $ObjTrabajador->dni = $input['dni'];
            $ObjTrabajador->email = $input['email'];
            $ObjTrabajador->activo = 1;
            $ObjTrabajador->save();
            return Redirect::to('administracion/trabajador');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    public function destroy($id) {
        $ObjTrabajador = Trabajador::find($id);
        $ObjTrabajador->delete();
        return Redirect::to('administracion/trabajador');
    }

}
