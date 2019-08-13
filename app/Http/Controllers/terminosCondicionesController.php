<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\terminosCondiciones;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class terminosCondicionesController extends Controller
{

public function vista() {
  return view('terminosCondiciones');
}
}
