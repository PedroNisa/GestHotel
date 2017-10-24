<?php


class ClienteController extends \BaseController {

    private $rules = array(
        'nombre' => 'Required',
        'apellido1' => 'Required',
        'apellido2' => 'Required',
        'dni' => 'Required',
        'telefono' => 'numeric',
        'email' => 'unique:cliente|email'
    );

    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    public function index() {
        $ObjCliente = Cliente::orderBy('id','DESC')->paginate();
        return View::make('Cliente.index')->with('Cliente', $ObjCliente);
    }

    public function create() {
        return View::make('Cliente.create');
    }

    public function store() {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules);
        if (!$validation->fails()) {
            $ObjCliente = new Cliente;
            $ObjCliente->nombre = $input['nombre'];
            $ObjCliente->apellido1 = $input['apellido1'];
            $ObjCliente->apellido2 = $input['apellido2'];
            $ObjCliente->telefono = $input['telefono'];
            $ObjCliente->direccion = $input['direccion'];
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            return Redirect::to('administracion/cliente');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    public function show($id) {
        $ObjCliente = Cliente::find($id);
        return View::make('Cliente.show')->with('Cliente', $ObjCliente);
    }

    public function edit($id) {
        $ObjCliente = Cliente::find($id);
        return View::make('Cliente.edit')->with('Cliente', $ObjCliente);
    }

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
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            return Redirect::to('administracion/cliente');
        } else {
            return Redirect::back()->withErrors($validation)->withInput();
        }
    }

    public function destroy($id) {
        $ObjCliente = Cliente::find($id);
        $ObjCliente->delete();
        return Redirect::to('administracion/cliente');
    }

    public function nuevoCliente() {
        return View::make('Cliente.new');
    }

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
            $ObjCliente->dni = $input['dni'];
            $ObjCliente->email = $input['email'];
            $ObjCliente->activo = 1;
            $ObjCliente->save();
            echo 'ok';
        } else {
            return View::make('Cliente.new')->withErrors($validation)->withInput();
        }
    }

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
