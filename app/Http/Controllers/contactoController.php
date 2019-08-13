<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class contactoController extends Controller
{
  public function crear(Request $req){

      $this->validate($req, [
      'nombre' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email'],
      'asunto' => ['required','string', 'max:255'],
      'mensaje' => ['required','string','alpha_dash','max:2048'],
    ]);

    $contactoNuevo = new contacto();
    $contactoNuevo->nombre = $req['nombre'];
    $contactoNuevo->email = $req['email'];
    $contactoNuevo->asunto = $req['asunto'];
    $contactoNuevo->mensaje = $req['mensaje'];

    $contactoNuevo->save();

    return back()->with('status','Muchas gracias por contactarse con nosotros. A la brevedad le responderemos');

  }
}
