<?php


class MailController extends \BaseController
{ 
    public function index()
{
    //muestra el formulario para realizar una reserva desde la web del hotel
     return \View::make('Front.index');
}

public function send()
   {
       //guarda el valor de los campos enviados desde el form en un array
       $data = Input::all();


        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $dni }}...
       \Mail::send('emails.message', $data, function($message)
       {
           //asunto
           $message->subject('nueva reserva de '. Input::get('nombreCompleto'));

           //receptor
           $message->to('dev3apps@gmail.com');

       });
       // devuelve la vista de agradecimiento
       return \View::make('emails.success');
   }
}
