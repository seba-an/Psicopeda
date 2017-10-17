<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class send extends Controller
{
  public function store(Request $request)
  {
      Mail::send('partials.envio',$request->all(), function($msj){
          $msj->subject('Correo de Contacto');
          $msj->to('cpconstruyamos@gmail.com');
      });
      Session::flash('message','Mensage enviado correctamente');
      return Redirect::to('/#reservas');
  }

}
