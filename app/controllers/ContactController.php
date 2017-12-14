<?php
/**
 * Created by PhpStorm.
 * User: miran
 * Date: 26/11/2017
 * Time: 12:56
 */

class ContactController extends \BaseController
{
    public function index()
    {
        //devuelve la vista con el formulario de contacto de la web del hotel
        return \View::make('Front.contact');
    }

    public function send()
    {
        //guarda el valor de los campos enviados desde el form en un array
        $data = Input::all();


        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $dni }}...
        \Mail::send('emails.messagecontact', $data, function($message)
        {
            //asunto
            $message->subject('nuevo mensaje de '. Input::get('nombreCompleto'));

            //receptor
            $message->to('dev3apps@gmail.com');

        });
        // devuelve la vista de agradecimiento
        return \View::make('emails.success');
    }
}