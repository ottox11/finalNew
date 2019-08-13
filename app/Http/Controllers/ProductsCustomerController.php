<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductsCustomerController extends Controller
{
  public function listado(){
  $products = Product::paginate(6);
  $vac = compact("products");
  return view("listaProductoCustomer", ['products'=> $products]);
}  //
}
