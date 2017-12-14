<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */


/*Llamadas al controlador Auth*/
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::get('/', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión




//RUTAS DEL PANEL DE ADMINISTRACIÓN

/* rutas del Sistema */

Route::resource('sistema/usuario', 'UsuarioController');
Route::resource('sistema/tipo-usuario', 'TipoUsuarioController');
Route::get('sistema/parametros', function() {
    if (Auth::check()) {
        return View::make('Parametros.parametros');
    } else {
        return Redirect::to('/');
    }
});


/* rutas de Administracion */

Route::resource('administracion/trabajador', 'TrabajadorController');
//ruta para eliminar el trabajador con el id pasado por parámetro
Route::get('trabajador/{id}/destroy',[
    'uses'=>'TrabajadorController@destroy',
    'as'=>'administracion.trabajador.destroy']);

Route::resource('administracion/cliente', 'ClienteController');

//ruta para eliminar un cliente
Route::get('cliente/{id}/destroy',[
    'before' => 'adminCont',
    'uses'=>'ClienteController@destroy',
    'as'=>'administracion.cliente.destroy']);

Route::get('cliente/nuevo', 'ClienteController@nuevoCliente');
Route::post('cliente/guardar', 'ClienteController@guardarCliente');
Route::get('reservaciones/cliente/autocompletar', 'ClienteController@autocompletarCliente');

Route::resource('administracion/habitacion', 'HabitacionController');
Route::get('habitacion/{id}/destroy',[   
    'uses'=>'HabitacionController@destroy',
    'as'=>'administracion.habitacion.destroy']);
Route::resource('administracion/tipo-habitacion', 'TipoHabitacionController');
Route::get('tipo-habitacion/{id}/destroy',[
    'uses'=>'TipoHabitacionController@destroy',
    'as'=>'administracion.tipo-habitacion.destroy']);
Route::resource('reservaciones', 'ReservaController');
Route::resource('reservaciones/detail', 'ReservaController@saveReservation');

/* * ****************peticiones ajax************************ */
Route::resource('sistema/parametros/moneda', 'MonedaController');
Route::get('administracion/moneda/{numPrices}', 'MonedaController@getList');
Route::get('administracion/tipo-habitacion/delete/price/{idprecio}', 'PrecioController@deletePrecio');
Route::get('reservaciones/realizar-cobro/{id_reserva}', 'ReservaController@realizarCobro');
Route::post('reservaciones/cobrar/{id_reserva}', 'ReservaController@confirmarCobro');
Route::get('reservaciones/liberar/{id_reserva}', 'ReservaController@liberar');
Route::get('reservaciones/pasar-cuenta/{id_reserva}', 'CuentaPorCobrarController@guardar');
/* * **************************************************************** */

/* * **********reportes******************* */
Route::get('administracion/reporte', function() {
    if (Auth::check()) {
        return View::make('Reporte.main');
    } else {
        return Redirect::to('/');
    }
});
Route::post('administracion/reporte/reservas', function() {
    if (Auth::check()) {
        return View::make('Reporte.reporte')->with('Input', Input::all());
    } else {
        return Redirect::to('/');
    }
});
/* * *********************************** */


Route::get('administracion', function() {
    if (Auth::check()) {
        return View::make('administracion');
    } else {
        return Redirect::to('/');
    }
});
Route::get('sistema', array('before' => 'adminSis', function() {
    if (Auth::check()) {
        return View::make('sistema');
    } else {
        return Redirect::to('/');
    }
}));

//pagina principal

Route::get('index', function() {
    if (Auth::check()) {
        return View::make('index');
    } else {
        return Redirect::to('login');
    }
});

//RUTAS DEL FRONTEND


Route::get('front/index', function() {
    if (Auth::check()) {
        return View::make('Front.index');
    } else {
        return Redirect::to('/');
    }
});
Route::get('front/contact', function() {
    if (Auth::check()) {
        return View::make('Front.contact');
    } else {
        return Redirect::to('/');
    }
});

Route::get('front/gallery', function() {
    if (Auth::check()) {
        return View::make('Front.gallery');
    } else {
        return Redirect::to('/');
    }
});

Route::get('front/room-details', function() {
    if (Auth::check()) {
        return View::make('Front.room-details');
    } else {
        return Redirect::to('/');
    }
});

Route::get('front/rooms-tariff', function() {
    if (Auth::check()) {
        return View::make('Front.rooms-tariff');
    } else {
        return Redirect::to('/');
    }
});

Route::get('front/introduction', function() {
    if (Auth::check()) {
        return View::make('Front.introduction');
    } else {
        return Redirect::to('/');
    }
});
Route::get('front/tours', function() {
    if (Auth::check()) {
        return View::make('Front.tours');
    } else {
        return Redirect::to('/');
    }
});

Route::get('front/about', function() {
    if (Auth::check()) {
        return View::make('Front.about');
    } else {
        return Redirect::to('/');
    }
});

//rutas para el formulario de reserva
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );

//rutas para el formulario de contacto
Route::post('contact', ['as' => 'contact', 'uses' => 'ContactController@send'] );

/* uso de filtros de seguridad para usuarios sin privilegios */
Route::when('sistema/*', 'adminSis');
Route::when('administracion/habitacion/*', 'adminCont');




