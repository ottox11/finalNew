<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class servicesController extends Controller
{


  public function listado(Request $request) {
      $service_name = $request->get('service_name');
      $service = Service::orderBy('id','DESC')
      ->service_name($service_name)
      ->paginate(20);
      $vac = compact("service");
      return view("service",['service' => $service]);
    }




  public function crear(Request $req){
        $this->validate($req, [
        'service_name' => ['required', 'string', 'max:255'],
        'services_description' => ['required', 'string', 'max:255'],
        'email' => ['email'],
        'address' => ['required', 'string', 'max:255'],
        'contact_phone' => ['required','between:0,99.99'],
        'image' => ['required','mimes:jpeg,png,jpg,gif,svg|max:2048'],
      ]);
      $serviceNuevo = new Service();
      $serviceNuevo->email = $req['email'];
      $serviceNuevo->service_name = $req['service_name'];
      $serviceNuevo->services_description = $req['services_description'];
      $serviceNuevo->address = $req['address'];
      $serviceNuevo->contact_phone = $req['contact_phone'];
      $serviceNuevo->image = $req->file('image')->store('public');
      $serviceNuevo->save();
      return back()->with('status', 'Datos cargados correctamente');
    }




}
