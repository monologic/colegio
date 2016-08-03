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
   		$email = $request->email;
   		$subject = 'Contacto por Mail';
   		$colegio = Colegio::all();
      $to = $colegio[0]->correo;
   		Mail::send('contacto.contactoMail', $data, function ($message) use($email, $nombre, $subject, $to){
		    $message->from('redlein7@gmail.com', $nombre);
		    $message->subject($subject);
		    $message->to($to);
		});

		dd('Mensaje Enviado');
		//return redirect('/#/mensajeenviado');

   }
}
