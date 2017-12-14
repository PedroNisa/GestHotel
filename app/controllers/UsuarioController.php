<?php

class UsuarioController extends \BaseController {

    // Array con las validaciones para formularios Usuarios
    private $rules = array(
        'email' => 'required|unique:usuario|email',
        'password' => 'required|min:6',
        'id_trabajador' => 'required',
        'id_tipo_usuario' => 'required',
    );

     // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }
    //devuelve el objeto a la vista que muestra el listado de usuarios
    public function index() {
        $ObjUsuario = Usuario::where('id_tipo_usuario', '!=', '1')->get();
        return View::make('Usuario.index')->with('Usuario', $ObjUsuario);
    }
    //devuelve la vista con el formulario para crear un nuevo usuario
    public function create() {
        return View::make('Usuario.create');
    }

    //guarda los datos introduccidos en el formulario Nuevo Usuario
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        //si pasa el validador
        if (!$validation->fails()) {
            $ObjUsuario = new Usuario;
            $ObjUsuario->email = $input['email'];
            $ObjUsuario->password = Hash::make($input['password']);// tipo de encriptacion Bcrypt
            $ObjUsuario->fecha_creacion = date('Y-m-d');
            $ObjUsuario->id_trabajador = $input['id_trabajador'];
            $ObjUsuario->id_tipo_usuario = $input['id_tipo_usuario'];
            $ObjUsuario->activo = 1;
            $ObjUsuario->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista los usuarios
            return Redirect::to('sistema/usuario');
        } else {//si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    // devuelve el objeto a la vista que lista el usuario pasado por parámetro
    public function show($id) {
        $ObjUsuario = Usuario::find($id);
        return View::make('Usuario.show')->with('Usuario', $ObjUsuario);
    }

    //devuelve el objeto a la vista para editar el usuario pasado por parámetro
    public function edit($id) {
        $ObjUsuario = Usuario::find($id);
        return View::make('Usuario.edit')->with('Usuario', $ObjUsuario);
    }
    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $curretRules = array(
            'password' => 'min:6',
            'id_trabajador' => 'required',
            'id_tipo_usuario' => 'required'
        );
        $validation = Validator::make($input, $curretRules, $this->message);
        if (!$validation->fails()) {
            $ObjUsuario = Usuario::find($id);
            if (Input::has('password')) {
                $ObjUsuario->password = Hash::make($input['password']);
            }
            $ObjUsuario->id_trabajador = $input['id_trabajador'];
            $ObjUsuario->id_tipo_usuario = $input['id_tipo_usuario'];
            $ObjUsuario->save();
            return Redirect::to('sistema/usuario');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }
//elimina el usuario pasado por parámetro
    public function destroy($id) {
        $ObjUsuario = Usuario::find($id);
        $ObjUsuario->delete();
        return Redirect::to('sistema/usuario');
    }

}
