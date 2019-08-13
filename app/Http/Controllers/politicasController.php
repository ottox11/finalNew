<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\politicas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class politicasController extends Controller
{
  public function vista() {
    return view('politicas');
}
}
