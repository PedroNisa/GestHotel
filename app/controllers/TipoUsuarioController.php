<?php

class TipoUsuarioController extends \BaseController {

    // Array con las validaciones para formulario Roles
    private $rules = array(
        'nombre' => 'Required'
    );
    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    //retorna el objeto a la vista con los roles guardados, excepto el corresondiente al administrador de sistemas
    public function index() {
        $ObjTipoUsuario = TipoUsuario::where('id', '!=', '1')->get();
        return View::make('TipoUsuario.index')->with('TipoUsuario', $ObjTipoUsuario);
    }

    //devuelve la vista con el formulario para crear un nuevo rol
    public function create() {
        return View::make('TipoUsuario.create');
    }

    //guarda los datos introduccidos en el formulario Nuevo Rol
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        //si pasa el validador
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjTipoUsuario = new TipoUsuario();
            $ObjTipoUsuario->nombre = $input['nombre'];
            $ObjTipoUsuario->descripcion = $input['descripcion'];
            $ObjTipoUsuario->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista los roles
            return Redirect::to('sistema/tipo-usuario');
        } else {//si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
    //devuelve el objeto a la vista para editar el rol pasado por parámetro
    public function edit($id) {
        $ObjTipoUsuario = TipoUsuario::find($id);
        return View::make('TipoUsuario.edit')->with('TipoUsuario', $ObjTipoUsuario);
    }
    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjTipoUsuario = TipoUsuario::find($id);
            $ObjTipoUsuario->nombre = $input['nombre'];
            $ObjTipoUsuario->descripcion = $input['descripcion'];
            $ObjTipoUsuario->save();
            return Redirect::to('sistema/tipo-usuario');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
    //elimina el rol pasado por parámetro
    public function destroy($id) {
            $ObjTipoUsuario = TipoUsuario::find($id);
            $ObjTipoUsuario->delete();
            return Redirect::to('sistema/tipo-usuario');
    }

}
