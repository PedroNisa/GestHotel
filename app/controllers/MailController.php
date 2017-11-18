<?php


class MailController extends \BaseController
{
    //
    public function index()
{
     return \View::make('Front.index');
}

public function send()
   {
       //guarda el valor de los campos enviados desde el form en un array
       $data = Input::all();

      // dd($data);

       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       \Mail::send('emails.message', $data, function($message)
       {

      // dd($message);
           //remitente
           $message->from(Input::get('email'));

           //asunto
        //   $message->subject(Input::subject);

           //receptor
           $message->to('dev3apps@gmail.com');

       });
       return \View::make('emails.success');
   }

}
