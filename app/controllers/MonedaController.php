<?php

class MonedaController extends \BaseController {

    // Array con las validaciones para el formulario moneda
    private $rules = array(
        'nombre' => 'Required',
        'pais' => 'Required',
        'simbolo' => 'Required'
    );
    private $message = array(
        'required' => 'Campo Obligatorio',
    );

    // Filtramos la entrada a la ruta, si no está autenticado, devolvemos a la raiz del proyecto
    public function __construct() {
        $this->beforeFilter(function() {
            if (!Auth::check()) {
                return Redirect::to('/');
            }
        });
    }

    //devuelve el objeto a la vista con el listado de las monedas
    public function index() {
        $ObjMoneda = Moneda::all();
        return View::make('Parametros.Moneda.index')->with('Moneda', $ObjMoneda);
    }

    //devuelve la vista con el formulario para crear una nueva moneda
    public function create() {
        return View::make('Parametros.Moneda.create');
    }

    //guarda los datos introduccidos en el formulario Nueva Moneda
    public function store() {
        //recupera todos los campos
        $input = Input::all();
        //si pasa el validador
        $validation = Validator::make($input, $this->rules, $this->message);
        if (!$validation->fails()) {
            //creamos un nuevo objeto basado en el modelo
            $ObjMoneda = new Moneda;
            $ObjMoneda->nombre = $input['nombre'];
            $ObjMoneda->pais = $input['pais'];
            $ObjMoneda->simbolo = $input['simbolo'];
            $ObjMoneda->save();
            //si se han guardado los datos correctamente nos devuelve la vista que lista las monedas
            return Redirect::to('sistema/parametros/moneda')->with('Moneda', Input::all());
        } else {
            //si falla al validar, nos muestra los errores
            return View::make('Parametros.Moneda.create')->withErrors($validation);
        }
    }

    //devuelve el objeto a la vista para editar el cliente pasado por parámetro
    public function edit($id) {
        $ObjMoneda = Moneda::find($id);
        return View::make('Parametros.Moneda.edit')->with('Moneda', $ObjMoneda);
    }

    // actualiza los datos editados
    public function update($id) {
        $input = Input::all();
        $validation = Validator::make($input, $this->rules, $this->message);
        if (!$validation->fails()) {
            $ObjMoneda = Moneda::find($id);
            $ObjMoneda->nombre = $input['nombre'];
            $ObjMoneda->pais = $input['pais'];
            $ObjMoneda->simbolo = $input['simbolo'];
            $ObjMoneda->save();
            return Redirect::to('sistema/parametros/moneda')->with('Moneda', $input);
        } else {
            return View::make('Parametros.Moneda.edit')->with('Moneda', this)->withErrors($validation);
//            return Redirect::back()->withErrors($validation);
        }
    }
    //elimina la moneda pasada por parámetro
    public function destroy($id) {
        $ObjMoneda = Moneda::find($id);
        $ObjMoneda->delete();
        return Redirect::to('sistema/parametros/moneda');
    }

    //recupera las monedas guardadas para mostrarlas en el formulario de agregar precio a la habitación
    public function getList($numPrices) {
        $ObjMoneda = Moneda::orderBy('nombre', 'asc')->get();
        return View::make('Parametros.Moneda.prices')->with('Moneda', $ObjMoneda)->with('numPrices', $numPrices);
    }

}
