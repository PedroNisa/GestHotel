<?php


class ClienteController extends \BaseController {

    // Array con las validaciones para formularios Cliente
    private $rules = array(
        'nombre' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'apellido1' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'apellido2' => 'required|between:3,15|regex:/^[A-zñÑ][A-zñÑ\s\.\']+$/',
        'dni' => 'required|regex:/^[0-9]{7,8}[A-Z]+$/',
        'telefono' =>['required','regex:/^[9|6|7][0-9]{8}$/'],
        'email' => 'required|email|unique:cliente,id',
        
    );

    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    /**
     * Guardamos un objeto cliente con los datos devueltos por la consulta,
     * y retornamos la vista que muestra todos los clientes
     * el método with, recibe dos parámetros, 
     * el primero es el nombre con el que recogeremos los datos en la vista,
     * el segundo el objeto con la data
     */
    public function index() {
        $ObjCliente = Cliente::orderBy('id','DESC')->get();
        return View::make('Cliente.index')->with('Cliente', $ObjCliente);
    }

    // devuelve la vista para crear un cliente nuevo
    public function create() {
        return View::make('Cliente.create');
    }

    //guarda los datos introduccidos en el formulario Nuevo Cliente
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
         //si pasa el validador
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjCliente = new Cliente;
            $ObjCliente->nombre = $input['nombre'];
            $ObjCliente->apellido1 = $input['apellido1'];
            $ObjCliente->apellido2 = $input['apellido2'];
            $ObjCliente->telefono = $input['telefono'];
            $ObjCliente->direccion = $input['direccion'];
            $ObjCliente->provincia = $input['provincia'];
            $ObjCliente->pais = $input['pais'];
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista los clientes
            return Redirect::to('administracion/cliente');
        } else {
            //si falla al validar, nos muestra los errores
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    // devuelve el objeto a la vista que lista el cliente pasado por parámetro la vista
    public function show($id) {
        $ObjCliente = Cliente::find($id);
        return View::make('Cliente.show')->with('Cliente', $ObjCliente);
    }

    //devuelve el objeto a la vista para editar el cliente pasado por parámetro
    public function edit($id) {
        $ObjCliente = Cliente::find($id);
        return View::make('Cliente.edit')->with('Cliente', $ObjCliente);
    }

    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjCliente = Cliente::find($id);
            $ObjCliente->nombre = $input['nombre'];
            $ObjCliente->apellido1 = $input['apellido1'];
            $ObjCliente->apellido2 = $input['apellido2'];
            $ObjCliente->telefono = $input['telefono'];
            $ObjCliente->direccion = $input['direccion'];
            $ObjCliente->provincia = $input['provincia'];
            $ObjCliente->pais = $input['pais'];
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            return Redirect::to('administracion/cliente');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    //elimina el cliente pasado por parámetro
    public function destroy($id) {
        $ObjCliente = Cliente::find($id);
        $ObjCliente->delete();
        return Redirect::to('administracion/cliente');
    }

    //devuelve la vista para crear un nuevo cliente a partir del modal nueva reserva
    public function nuevoCliente() {
        return View::make('Cliente.new');
    }

    //guarda el cliente desde le modal nueva reserva
    public function guardarCliente() {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjCliente = new Cliente;
            $ObjCliente->nombre = $input['nombre'];
            $ObjCliente->apellido1 = $input['apellido1'];
            $ObjCliente->apellido2 = $input['apellido2'];
            $ObjCliente->telefono = $input['telefono'];
            $ObjCliente->direccion = $input['direccion'];
            $ObjCliente->provincia = $input['provincia'];
            $ObjCliente->pais = $input['pais'];
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            echo 'ok';
        } else {
            return View::make('Reservas.detail')->withErrors($validation)->withInput();
        }
    }

    //función autocompletar campo cliente en modal nueva reserva
    public function autocompletarCliente() {
        $input = Input::all();
        $comodin = '%' . $input['term'] . '%';
        $cliente = Cliente::where('nombre', 'like', $comodin)->take(10)->get();
        $result = [];
        foreach ($cliente as $row) {
            $nombreCompleto = $row->nombre . ' ' . $row->apellido1 . ' ' . $row->apellido2;
            array_push($result, ["id" => $row->id, "label" => $nombreCompleto, "value" => strip_tags($nombreCompleto)]);
        }
        return json_encode($result);
    }

}
