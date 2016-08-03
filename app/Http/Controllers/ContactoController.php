<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Colegio;
use Mail;

class ContactoController extends Controller
{
    public function send(Request $request){

   		$data = $request->all();
   		$nombre = $request->nombre;
   		$from = $request->email;
   		$subject = $request->contenido;
   		$colegio = Colegio::all();
        $to = $colegio[0]->correo;
   		Mail::send('contacto.contacto', $data, function ($message) use ($nombre, $from, $subject, $to){
		    $message->from($nombre, $from);
		    $message->subject($subject);
		    $message->to( $to);
		});

		dd('Mensaje Enviado');
		//return redirect('/#/mensajeenviado');

   }
}
